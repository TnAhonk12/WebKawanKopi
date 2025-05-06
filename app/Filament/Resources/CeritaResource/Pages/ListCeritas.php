<?php

namespace App\Filament\Resources\CeritaResource\Pages;

use App\Filament\Resources\CeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCeritas extends ListRecords
{
    protected static string $resource = CeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
