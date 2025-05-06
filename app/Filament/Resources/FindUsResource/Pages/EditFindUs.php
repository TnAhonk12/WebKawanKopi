<?php

namespace App\Filament\Resources\FindUsResource\Pages;

use App\Filament\Resources\FindUsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFindUs extends EditRecord
{
    protected static string $resource = FindUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return FindUsResource::getUrl('index');
    }
}
