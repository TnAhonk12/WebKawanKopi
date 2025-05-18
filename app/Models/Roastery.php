<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roastery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',
        'price',
        'image',
        'berat',
        'desc',
        'link_shopee'

    ];
    protected static function booted()
    {
        static::saving(function ($roastery) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'roasteries/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($roastery->getOriginal('image')) {
                    Storage::disk('public')->delete($roastery->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $roastery->image = $filename;
            }
        });
    }
    public function kategori()
    {
    return $this->belongsTo(RoasteryCategory::class, 'kategori_id');
    }
}