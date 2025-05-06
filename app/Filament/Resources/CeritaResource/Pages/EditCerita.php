<?php

namespace App\Filament\Resources\CeritaResource\Pages;

use App\Filament\Resources\CeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCerita extends EditRecord
{
    protected static string $resource = CeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return CeritaResource::getUrl('index');
    }
}
