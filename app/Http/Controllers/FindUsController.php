<?php

namespace App\Http\Controllers;

use App\Models\FindUs;
use Illuminate\Support\Facades\Storage;

class FindUsController extends Controller
{
    public function index()
    {
        $locations = FindUs::with('photos')->get();

        $findUsList = $locations->map(function ($loc) {
            return [
                'id' => $loc->id,
                'nama_tempat' => $loc->nama_tempat,
                'address' => $loc->address,
                'foto' => $loc->foto ? Storage::url($loc->foto) : null,
                'maps' => $loc->maps,
                'grab' => $loc->grab,
                'gofood' => $loc->gofood,
                'shopee' => $loc->shopee,
                'photos' => $loc->photos->map(fn($p) => $p->image ? Storage::url($p->image) : null)->filter()->values()->all(),
            ];
        });

        return view('ourStore', compact('findUsList'));
    }

    public function show($id)
    {
        $store = FindUs::with('photos')->findOrFail($id);

        $findUs = [
            'id' => $store->id,
            'nama_tempat' => $store->nama_tempat,
            'address' => $store->address,
            'foto' => $store->foto ? Storage::url($store->foto) : null,
            'maps' => $store->maps,
            'grab' => $store->grab,
            'gofood' => $store->gofood,
            'shopee' => $store->shopee,
            'photos' => $store->photos->map(fn($p) => $p->image ? Storage::url($p->image) : null)->filter()->values()->all(),
        ];

        return view('ourStoreItem', compact('findUs'));
    }


}