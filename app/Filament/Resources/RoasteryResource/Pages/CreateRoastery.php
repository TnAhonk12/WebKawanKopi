<?php

namespace App\Filament\Resources\RoasteryResource\Pages;

use App\Filament\Resources\RoasteryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoastery extends CreateRecord
{
    protected static string $resource = RoasteryResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return RoasteryResource::getUrl('index');
    }
}
