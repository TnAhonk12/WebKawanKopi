<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CeritaPhoto extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['cerita_id', 'image'];

    public function cerita()
    {
        return $this->belongsTo(cerita::class);
    }
    protected static function booted()
    {
        static::saving(function ($ceritasp) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'finduses/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($ceritasp->getOriginal('image')) {
                    Storage::disk('public')->delete($ceritasp->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $ceritasp->image = $filename;
            }
        });
    }
}
