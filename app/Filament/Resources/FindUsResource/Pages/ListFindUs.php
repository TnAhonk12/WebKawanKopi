<?php

namespace App\Filament\Resources\FindUsResource\Pages;

use App\Filament\Resources\FindUsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFindUs extends ListRecords
{
    protected static string $resource = FindUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
