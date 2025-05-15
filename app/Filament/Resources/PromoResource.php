<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Promo;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\PromoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PromoResource\RelationManagers;

class PromoResource extends Resource
{
    protected static ?string $navigationGroup = '📦 Lini Produk';
    protected static ?string $model = Promo::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            FileUpload::make('image')
                ->image()
                ->directory('promos-images')
                ->saveUploadedFileUsing(function ($file) {
                    // Inisialisasi ImageManager dengan driver GD
                    $manager = new ImageManager(new Driver());

                    // Baca dan konversi gambar ke format WebP
                    $image = $manager->read($file)->toWebp(80);

                    // Buat nama file unik
                    $filename = 'promos/' . uniqid() . '.webp';

                    // Simpan gambar ke storage
                    Storage::disk('public')->put($filename, (string) $image);

                    return $filename;
                })
                ->nullable()
                ->label('Promo Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('no')
                ->label('No')
                ->getStateUsing(function ($record, \Filament\Tables\Contracts\HasTable $livewire) {
                    $page = (int) $livewire->getTablePage(); // pastikan integer
                    $perPage = (int) $livewire->getTableRecordsPerPage(); // pastikan integer
                    $recordIndex = $livewire->getTableRecords()->search(fn ($r) => $r->getKey() == $record->getKey());

                    return ($page - 1) * $perPage + $recordIndex + 1;
                }),
            
            ImageColumn::make('image')
                ->label('Gambar')
                ->size(60),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromos::route('/'),
            'create' => Pages\CreatePromo::route('/create'),
            'edit' => Pages\EditPromo::route('/{record}/edit'),
        ];
    }
}
