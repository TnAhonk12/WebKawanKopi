<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FindUsPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['find_us_id', 'image'];

    protected static function booted()
    {
        static::saving(function ($findusp) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'finduses/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($findusp->getOriginal('image')) {
                    Storage::disk('public')->delete($findusp->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $findusp->image = $filename;
            }
        });
    }

    public function findUs()
    {
        return $this->belongsTo(FindUs::class);
    }
}
