<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoasteryCategory extends Model
{
    use HasFactory;
    
    protected $table = 'roastery_categories';

    protected $fillable = [
        'nama_roastery',
    ];

    public function roasteries()
    {
        return $this->hasMany(Roastery::class, 'kategori_id');
    }
}
