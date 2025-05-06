<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextEditor;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    public static function getNavigationSort(): ?int
    {
        return 2;
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Konten Website';
    }
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita Kawan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('title')
                ->label('Judul Berita')
                ->required(),

            FileUpload::make('image')
                ->label('Gambar Berita')
                ->image()
                ->directory('berita-images')
                ->saveUploadedFileUsing(function ($file) {
                    // Inisialisasi ImageManager dengan driver GD
                    $manager = new ImageManager(new Driver());

                    // Baca dan konversi gambar ke format WebP
                    $image = $manager->read($file)->toWebp(80);

                    // Buat nama file unik
                    $filename = 'beritas/' . uniqid() . '.webp';

                    // Simpan gambar ke storage
                    Storage::disk('public')->put($filename, (string) $image);

                    return $filename;
                })
                ->required(),  

            Textarea::make('content')
                ->label('Konten')
                ->required()
                ->rows(5),

            TextInput::make('author')
                ->label('Penulis')
                ->required(),

            TextInput::make('slug')
                ->label('Slug')
                ->hidden()
                ->required()
                ->unique(ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')
                ->label('Judul')
                ->searchable(),

            TextColumn::make('author')
                ->label('Penulis')
                ->searchable(),

            TextColumn::make('slug')
                ->label('Slug'),

            ImageColumn::make('image')
                ->label('Gambar')
                ->size(60), // Menampilkan gambar kecil di tabel
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
