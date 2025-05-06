<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_menu',
        'image',
        'category_id',
    ];


    protected static function booted()
    {
        static::saving(function ($menu) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'menus/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($menu->getOriginal('image')) {
                    Storage::disk('public')->delete($menu->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $menu->image = $filename;
            }
        });
    }

    // Relasi: Menu milik satu Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
