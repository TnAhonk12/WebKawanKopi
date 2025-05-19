<?php

namespace App\Http\Controllers;

use App\Models\Cerita;
use Illuminate\Support\Facades\Storage;

class CeritaController extends Controller
{
    public static function getData()
    {
        return [
            'ceritas' => Cerita::latest()->get()->map(function ($c) {
                return [
                    'title' => $c->title,
                    'name' => $c->name,
                    'slug' => $c->slug,
                    'image' => $c->image ? Storage::url($c->image) : null,
                    'link_youtube' => $c->link_youtube
                        ? preg_replace(
                            '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/',
                            'https://www.youtube.com/embed/$1',
                            $c->link_youtube
                        )
                        : null,
                    'content' => $c->content,
                ];
            }),
        ];
    }

    public function show($slug)
    {
        $cerita = Cerita::where('slug', $slug)->with('images')->firstOrFail();
        return view('ceritaKawanItem', compact('cerita'));
    }
}
