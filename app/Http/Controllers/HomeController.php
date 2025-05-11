<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PromoController;

class HomeController extends Controller
{
    public function index()
    {
        $menuData = MenuController::getData();
        $promoData = PromoController::getData();

        return view('index', array_merge($menuData, $promoData));
    }
}
