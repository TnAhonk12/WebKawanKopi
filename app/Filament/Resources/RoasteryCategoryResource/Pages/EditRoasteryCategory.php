<?php

namespace App\Filament\Resources\RoasteryCategoryResource\Pages;

use App\Filament\Resources\RoasteryCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoasteryCategory extends EditRecord
{
    protected static string $resource = RoasteryCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return RoasteryCategoryResource::getUrl('index');
    }
}
