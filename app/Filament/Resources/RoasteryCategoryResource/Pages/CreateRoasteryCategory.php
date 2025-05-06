<?php

namespace App\Filament\Resources\RoasteryCategoryResource\Pages;

use App\Filament\Resources\RoasteryCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoasteryCategory extends CreateRecord
{
    protected static string $resource = RoasteryCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return RoasteryCategoryResource::getUrl('index');
    }
}
