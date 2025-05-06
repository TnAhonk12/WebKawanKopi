<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
    ];
    protected static function booted()
    {
        static::saving(function ($promosp) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'promos/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($promosp->getOriginal('image')) {
                    Storage::disk('public')->delete($promosp->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $promosp->image = $filename;
            }
        });
    }
}
