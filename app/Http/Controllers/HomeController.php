<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\BeritaController;

class HomeController extends Controller
{
    public function index()
    {
        $menuData = MenuController::getData();
        $promoData = PromoController::getData();
        $merchData = MerchandiseController::getData();
        $ceritaData = CeritaController::getData();
        $beritaData = BeritaController::getData();

        return view('index', array_merge(
            $menuData,
            $promoData,
            $merchData,
            $ceritaData,
            $beritaData
        ));
    }
}
