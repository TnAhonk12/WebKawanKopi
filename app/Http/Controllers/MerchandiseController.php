<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    public static function getData()
    {
        return [
            'merchandises' => Merchandise::latest()->get()->map(function ($item) {
                return [
                    'name' => $item->name,
                    'image' => $item->image ? Storage::url($item->image) : null,
                    'price' => $item->price,
                    'link' => $item->link,
                    'link_shopee' => $item->link_shopee,
                ];
            }),
        ];
    }
}
