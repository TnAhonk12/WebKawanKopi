<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CeritaResource\Pages;
use App\Filament\Resources\CeritaResource\RelationManagers;
use App\Models\Cerita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class CeritaResource extends Resource
{
    protected static ?string $model = Cerita::class;
    public static function getNavigationSort(): ?int
    {
        return 3;
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Konten Website';
    }
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

                TextInput::make('slug')
                    ->label('Slug')
                    ->hidden()
                    ->required()
                    ->unique(ignoreRecord: true), // Slug tetap bisa diisi manual jika diperlukan

                Textarea::make('content')
                    ->label('Konten Cerita')
                    ->required()
                    ->rows(5),

                // FileUpload::make('image')
                //     ->label('Gambar Cerita')
                //     ->image()
                //     ->directory('cerita-images')  // Menyimpan gambar di folder 'public/cerita-images'
                //     ->required(),    

                TextInput::make('name')
                    ->label('Nama Penulis')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')
                ->label('Judul Cerita')
                ->searchable(),

            TextColumn::make('name')
                ->label('Penulis')
                ->searchable(),

            TextColumn::make('slug')
                ->label('Slug'),

            // ImageColumn::make('image')
            //     ->label('Gambar')
            //     ->size(60), // Menampilkan gambar kecil di tabel
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
            'index' => Pages\ListCeritas::route('/'),
            'create' => Pages\CreateCerita::route('/create'),
            'edit' => Pages\EditCerita::route('/{record}/edit'),
        ];
    }
}
