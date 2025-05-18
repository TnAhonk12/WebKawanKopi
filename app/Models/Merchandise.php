<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchandise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',
        'link_shopee',
        'price',
        'image',
    ];

    protected static function booted()
    {
        static::saving(function ($merch) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'merchandises/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($merch->getOriginal('image')) {
                    Storage::disk('public')->delete($merch->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $merch->image = $filename;
            }
        });
    }
}
