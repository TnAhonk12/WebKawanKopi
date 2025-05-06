<?php

namespace App\Filament\Resources\MenuResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\MenuResource;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\Laravel\Facades\Image;

class CreateMenu extends CreateRecord
{
    protected static string $resource = MenuResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return MenuResource::getUrl('index');
    }
   
}
