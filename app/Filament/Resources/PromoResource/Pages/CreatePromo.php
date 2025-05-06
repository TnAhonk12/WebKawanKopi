<?php

namespace App\Filament\Resources\PromoResource\Pages;

use App\Filament\Resources\PromoResource;
use App\Models\Promo;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePromo extends CreateRecord
{
    protected static string $resource = PromoResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return PromoResource::getUrl('index');
    }
}

