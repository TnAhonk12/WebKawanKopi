<?php

namespace App\Filament\Resources\RoasteryResource\Pages;

use App\Filament\Resources\RoasteryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoastery extends EditRecord
{
    protected static string $resource = RoasteryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return RoasteryResource::getUrl('index');
    }
}
