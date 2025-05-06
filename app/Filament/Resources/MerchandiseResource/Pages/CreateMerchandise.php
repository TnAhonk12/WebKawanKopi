<?php

namespace App\Filament\Resources\MerchandiseResource\Pages;

use App\Filament\Resources\MerchandiseResource;
use App\Models\Merchandise;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMerchandise extends CreateRecord
{
    protected static string $resource = MerchandiseResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return MerchandiseResource::getUrl('index');
    }
}
