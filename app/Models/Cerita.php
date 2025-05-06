<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cerita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'name',
        'content',
        'slug',
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
}
