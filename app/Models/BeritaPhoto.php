<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BeritaPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['berita_id', 'image'];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
    protected static function booted()
    {
        static::saving(function ($beritasp) {
            if (request()->hasFile('image')) {
                $file = request()->file('image');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'finduses/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($beritasp->getOriginal('image')) {
                    Storage::disk('public')->delete($beritasp->getOriginal('image'));
                }
    
                // Simpan path baru ke database
                $beritasp->image = $filename;
            }
        });
    }
}
