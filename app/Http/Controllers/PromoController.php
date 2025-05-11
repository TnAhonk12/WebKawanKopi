<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public static function getData()
    {
        return [
            'promoImages' => Promo::latest()->get()->map(function ($promo) {
                return Storage::url($promo->image); // hasilkan URL ke /storage/...
            }),
        ];
    }
}
