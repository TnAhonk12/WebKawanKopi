<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Roastery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Select;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = '🎁 Roastery & Merchandise';
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
                TextInput::make('price')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp ')
                    ->minValue(0)
                    ->nullable(),

                Select::make('kategori_id')
                        ->label('Kategori Roastery')
                        ->relationship('kategori', 'nama_roastery')
                        ->searchable()
                        ->preload()
                        ->nullable(),

                TextInput::make('link')
                    ->label('Link ke E-commerce')
                    ->url()
                    ->suffixIcon('heroicon-o-link')
                    ->required(),
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
                
                TextColumn::make('name')
                    ->label('Nama Roastery')
                    ->searchable(),

                TextColumn::make('link')
                    ->label('Link')
                    ->url('link'),

                TextColumn::make('kategori.nama_roastery')
                    ->label('Kategori Roastery')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true), // format otomatis jadi 'Rp 35.000'

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
