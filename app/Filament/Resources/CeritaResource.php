<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Cerita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\CeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CeritaResource\RelationManagers;

class CeritaResource extends Resource
{
    protected static ?string $model = Cerita::class;

    protected static ?string $navigationGroup = '📚 Konten Website';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Cerita';
    protected static ?string $pluralModelLabel = 'Cerita Kawan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Cerita')
                    ->required(),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('ceritas')
                    ->saveUploadedFileUsing(function ($file) {
                            // Inisialisasi ImageManager dengan driver GD
                            $manager = new ImageManager(new Driver());

                            // Baca dan konversi gambar ke format WebP
                            $image = $manager->read($file)->toWebp(80);

                            // Buat nama file unik
                            $filename = 'ceritas/' . uniqid() . '.webp';

                            // Simpan gambar ke storage
                            Storage::disk('public')->put($filename, (string) $image);

                            return $filename;
                        })
                    ->required(),

                TextInput::make('slug')
                    ->label('Slug')
                    ->hidden()
                    ->required()
                    ->unique(ignoreRecord: true), // Slug tetap bisa diisi manual jika diperlukan
                
                TextInput::make('name')
                    ->label('Nama Penulis')
                    ->required(),
                
                TextInput::make('link_youtube')
                    ->label('Link Youtube')
                    ->required(),

                Textarea::make('content')
                    ->label('Konten Cerita')
                    ->required()
                    ->rows(5),

                Repeater::make('images')
                    ->relationship()
                    ->label('Foto Tambahan')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Foto')
                            ->image()
                            ->directory('cerita-photos')
                            ->saveUploadedFileUsing(function ($file) {
                                // Inisialisasi ImageManager dengan driver GD
                                $manager = new ImageManager(new Driver());
        
                                // Baca dan konversi gambar ke format WebP
                                $image = $manager->read($file)->toWebp(80);
        
                                // Buat nama file unik
                                $filename = 'ceritasp/' . uniqid() . '.webp';
        
                                // Simpan gambar ke storage
                                Storage::disk('public')->put($filename, (string) $image);
        
                                return $filename;
                            })
                            ->nullable(),
                    ])
                        ->columnSpan('full')
                        ->collapsible(),
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
            
            TextColumn::make('title')
                ->label('Judul Cerita')
                ->searchable(),

            TextColumn::make('name')
                ->label('Penulis')
                ->searchable(),

            ImageColumn::make('image')
                ->label('Gambar')
                ->size(60),

            TextColumn::make('slug')
                ->label('Slug'),
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
            'index' => Pages\ListCeritas::route('/'),
            'create' => Pages\CreateCerita::route('/create'),
            'edit' => Pages\EditCerita::route('/{record}/edit'),
        ];
    }
}
