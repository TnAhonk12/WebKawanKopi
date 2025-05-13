<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FindUs extends Model
{
    use HasFactory;
    protected $with = ['photos'];
    protected $withCount = ['photos'];
    protected $table = 'find_uses';
    
    protected $fillable = [
        'nama_tempat',
        'address',
        'foto',
        'maps',
        'grab',
        'gofood',
        'shopee',
    ];

    protected static function booted()
    {
        static::saving(function ($findus) {
            if (request()->hasFile('foto')) {
                $file = request()->file('foto');
    
                // Konversi ke .webp
                $webpImage = Image::make($file)->encode('webp', 80);
    
                // Nama file acak
                $filename = 'finduses/' . uniqid() . '.webp';
    
                // Simpan di public storage
                Storage::disk('public')->put($filename, $webpImage);
    
                // Hapus file lama kalau ada
                if ($findus->getOriginal('foto')) {
                    Storage::disk('public')->delete($findus->getOriginal('foto'));
                }
    
                // Simpan path baru ke database
                $findus->image = $filename;
            }
        });
    }

    public function photos()
    {
        return $this->hasMany(FindUsPhoto::class);
    }
}
