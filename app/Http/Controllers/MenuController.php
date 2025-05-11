<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public static function getData()
    {
        $categories = Category::with('menus')->get();

        return [
            'menuCategories' => $categories,

            // gunakan nama_kategori sebagai key
            'menus' => $categories->mapWithKeys(function ($category) {
                return [$category->nama_kategori => $category->menus->pluck('nama_menu')];
            }),

            'filenameMap' => $categories->flatMap(function ($category) {
                return $category->menus->mapWithKeys(function ($menu) {
                    return [$menu->nama_menu => $menu->image ? Storage::url($menu->image) : ''];
                });
            }),
        ];
    }
}
