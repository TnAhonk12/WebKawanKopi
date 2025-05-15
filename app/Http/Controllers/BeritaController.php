<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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

    public function show($slug)
    {
        $berita = Berita::with('images')->where('slug', $slug)->firstOrFail();

        $data = [
            'title' => $berita->title,
            'slug' => $berita->slug,
            'author' => $berita->author,
            'createdAt' => $berita->created_at->format('j F Y'),
            'desc' => $berita->content,
            'images' => $berita->images->map(fn($img) => Storage::url($img->image))
                        ->prepend(Storage::url($berita->image)) // Tambahkan gambar utama di awal
                        ->values(),
        ];

        return view('beritaKawanItem', compact('data'));
    }

}
