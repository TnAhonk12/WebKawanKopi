<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public static function getData()
    {
        $beritas = Berita::with('images')->latest()->get();

        return [
            'beritaKawan' => $beritas->map(function ($berita) {
                return [
                    'title' => $berita->title,
                    'slug' => $berita->slug,
                    'image' => Storage::url($berita->image),
                    'createdBy' => $berita->author,
                    'createdAt' => $berita->created_at->format('j F Y'),
                    'desc' => $berita->content,
                    'images' => $berita->images->map(function ($img) {
                        return Storage::url($img->image);
                    })->prepend(Storage::url($berita->image))->values(), // gambar utama + tambahan
                ];
            }),
        ];
    }
}
