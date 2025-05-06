<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Roastery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\RoasteryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoasteryResource\RelationManagers;

class RoasteryResource extends Resource
{
    protected static ?string $model = Roastery::class;
    public static function getNavigationSort(): ?int
    {
        return 4;
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Roastery & Merchandise';
    protected static ?string $navigationLabel = 'Roastery';
    protected static ?string $pluralModelLabel = 'Roastery Kawan Kopi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Roastery')
                    ->required(),

                FileUpload::make('image')
                    ->label('Foto Roastery')
                    ->image()
                    ->directory('roastery-images')
                    ->saveUploadedFileUsing(function ($file) {
                        // Inisialisasi ImageManager dengan driver GD
                        $manager = new ImageManager(new Driver());

                        // Baca dan konversi gambar ke format WebP
                        $image = $manager->read($file)->toWebp(80);

                        // Buat nama file unik
                        $filename = 'roasteries/' . uniqid() . '.webp';

                        // Simpan gambar ke storage
                        Storage::disk('public')->put($filename, (string) $image);

                        return $filename;
                    })
                    ->required(),

                TextInput::make('link')
                    ->label('Link ke E-commerce')
                    ->url()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Roastery')
                    ->searchable(),

                TextColumn::make('link')
                    ->label('Link')
                    ->url('link'),

                ImageColumn::make('image')
                    ->label('Image')
                    ->size(60),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRoasteries::route('/'),
            'create' => Pages\CreateRoastery::route('/create'),
            'edit' => Pages\EditRoastery::route('/{record}/edit'),
        ];
    }
}
