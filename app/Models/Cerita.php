<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cerita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'name',
        'content',
        'slug',
        'image',
        'link_youtube'
    ];
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title); // Mengubah title menjadi slug
            }
        });
    }

    protected static function booted()
    {
        static::saving(function ($ceritas) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'ceritas/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($ceritas->getOriginal('image')) {
                    Storage::disk('public')->delete($ceritas->getOriginal('image'));
                }

                $ceritas->image = $filename;
            }
        });
    }
    public function images()
    {
        return $this->hasMany(CeritaPhoto::class);
    }
}
