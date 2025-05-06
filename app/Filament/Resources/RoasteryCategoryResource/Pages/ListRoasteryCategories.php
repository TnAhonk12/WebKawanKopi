<?php

namespace App\Filament\Resources\RoasteryCategoryResource\Pages;

use App\Filament\Resources\RoasteryCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoasteryCategories extends ListRecords
{
    protected static string $resource = RoasteryCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
