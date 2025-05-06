<?php

namespace App\Filament\Resources\CeritaResource\Pages;

use App\Filament\Resources\CeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCerita extends CreateRecord
{
    protected static string $resource = CeritaResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return CeritaResource::getUrl('index');
    }
}
