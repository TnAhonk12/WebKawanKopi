<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return UserResource::getUrl('index');
    }
}
