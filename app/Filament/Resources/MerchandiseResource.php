<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Merchandise;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MerchandiseResource\Pages;
use App\Filament\Resources\MerchandiseResource\RelationManagers;

class MerchandiseResource extends Resource
{
    protected static ?string $model = Merchandise::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationGroup = '🎁 Roastery & Merchandise';
    protected static ?string $navigationLabel = 'Merchandise';
    protected static ?string $pluralModelLabel = 'Merchandise Kawan Kopi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Nama Merchandise'),

                TextInput::make('link')
                    ->url()
                    ->required()
                    ->label('Link Pembelian'),

                TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->label('Harga'),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('merchandise-images')
                    ->saveUploadedFileUsing(function ($file) {
                        // Inisialisasi ImageManager dengan driver GD
                        $manager = new ImageManager(new Driver());

                        // Baca dan konversi gambar ke format WebP
                        $image = $manager->read($file)->toWebp(80);

                        // Buat nama file unik
                        $filename = 'merchandises/' . uniqid() . '.webp';

                        // Simpan gambar ke storage
                        Storage::disk('public')->put($filename, (string) $image);

                        return $filename;
                    })
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
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('price')
                    ->money('IDR', true)
                    ->label('Harga'),

                ImageColumn::make('image')
                    ->label('Gambar')
                    ->size(60),

                TextColumn::make('link')
                        ->label('Link')
                        ->url(fn ($record) => $record->link)
                        ->suffixIcon('heroicon-o-link')
                        ->openUrlInNewTab(),
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
            'index' => Pages\ListMerchandises::route('/'),
            'create' => Pages\CreateMerchandise::route('/create'),
            'edit' => Pages\EditMerchandise::route('/{record}/edit'),
        ];
    }
}
