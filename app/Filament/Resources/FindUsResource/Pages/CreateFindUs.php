<?php

namespace App\Filament\Resources\FindUsResource\Pages;

use App\Filament\Resources\FindUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFindUs extends CreateRecord
{
    protected static string $resource = FindUsResource::class;
    protected function afterSave(): void
    {
        $findUs = $this->record; // Data FindUs yang baru disimpan

        // Tambahkan foto tambahan jika ada
        if (request()->hasFile('additional_photos')) {
            foreach (request()->file('additional_photos') as $file) {
                // Simpan foto tambahan
                $findUs->photos()->create([
                    'foto' => $file->store('find-us-images', 'public'),
                ]);
            }
        }

        parent::afterSave();
    }
    protected function getRedirectUrl(): string
    {
        // Setelah create berhasil, langsung balik ke table
        return FindUsResource::getUrl('index');
    }
}
