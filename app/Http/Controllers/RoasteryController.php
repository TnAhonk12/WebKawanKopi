<?php

namespace App\Http\Controllers;

use App\Models\Roastery;
use App\Models\RoasteryCategory;
use Illuminate\Support\Facades\Storage;

class RoasteryController extends Controller
{
    /**
     * Menampilkan halaman Roastery utama berdasarkan kategori.
     * Jika tidak ada kategori dipilih, maka tidak menampilkan item apapun.
     */
    public function index()
    {
        $kategoriId = request('kategori');

        $data = collect(); // Default: kosong

        if ($kategoriId) {
            $category = RoasteryCategory::with('roasteries')->findOrFail($kategoriId);
            $data = collect([
                [
                    'kategori' => $category->nama_roastery,
                    'items' => $category->roasteries->map(function ($item) {
                        return [
                            'id' => $item->id,
                            'name' => $item->name,
                            'image' => $item->image ? Storage::url($item->image) : null,
                            'link' => $item->link,
                            'price' => $item->price,
                        ];
                    })->all()
                ]
            ]);
        }

        return view('roastery', compact('data'));
    }

    /**
     * Menampilkan detail satu produk Roastery.
     */
    public function show($id)
    {
        $roastery = Roastery::with('kategori')->findOrFail($id);

        // Ambil semua roastery dengan kategori yang sama
        $roasteries = Roastery::where('kategori_id', $roastery->kategori_id)->get();

        $roasteryProducts = $roasteries->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'image' => $item->image ? Storage::url($item->image) : null,
                'price' => $item->price ?? '-',
                'weight' => $item->weight ?? '-', // pastikan kolom 'weight' ada di DB
                'desc' => $item->description ?? '-', // pastikan kolom 'description' ada juga
                'link' => $item->link ?? '#',
                'kategori' => $item->kategori->nama_roastery,
            ];
        });

        return view('roasteryItem', [
            'roasteryProducts' => $roasteryProducts,
            'activeRoasteryId' => $roastery->id,
        ]);
    }

}
