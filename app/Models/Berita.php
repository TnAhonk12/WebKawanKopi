<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Traits\LogsActivity;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    // use LogsActivity;

    // protected static $logName = 'berita';
    // protected static $logAttributes = ['title', 'slug', 'author', 'content'];
    // protected static $logOnlyDirty = true;
    // protected static $submitEmptyLogs = false;
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'author',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }

    protected static function booted()
    {
        static::saving(function ($berita) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'beritas/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($berita->getOriginal('image')) {
                    Storage::disk('public')->delete($berita->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $berita->image = $filename;
            }
        });
    }

    // public function getActivitylogOptions(): array
    // {
    //     return [
    //         // Jika ingin log dengan nama 'berita', bisa diatur di sini
    //         'log_name' => 'berita',
    //         'log_attributes' => ['title', 'slug', 'author', 'content', 'image'],
    //         'log_only_dirty' => true,
    //         'submit_empty_logs' => false,
    //     ];
    // }
}
