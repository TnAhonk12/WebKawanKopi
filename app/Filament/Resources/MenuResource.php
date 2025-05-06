<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Menu;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Select;
use Intervention\Image\Facades\Image;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MenuResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MenuResource\RelationManagers;
use Intervention\Image\Drivers\Gd\Driver;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;
    public static function getNavigationSort(): ?int
    {
        return 1;
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Lini Produk';
    protected static ?string $navigationLabel = 'Menu';
    protected static ?string $pluralModelLabel = 'Menu Kawan Kopi';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_menu')
                    ->label('Nama Menu')
                    ->required(),

                // FileUpload::make('image')
                //     ->label('Gambar')
                //     ->image() // Validasi sebagai gambar
                //     ->directory('menu-images')
                //     ->required(),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('menu-images')
                    ->saveUploadedFileUsing(function ($file) {
                            // Inisialisasi ImageManager dengan driver GD
                            $manager = new ImageManager(new Driver());

                            // Baca dan konversi gambar ke format WebP
                            $image = $manager->read($file)->toWebp(80);

                            // Buat nama file unik
                            $filename = 'menus/' . uniqid() . '.webp';

                            // Simpan gambar ke storage
                            Storage::disk('public')->put($filename, (string) $image);

                            return $filename;
                        })
                    ->required(),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'nama_kategori')
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

                TextColumn::make('nama_menu')
                    ->label('Nama Menu')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.nama_kategori')
                    ->label('Category')
                    ->searchable()
                    ->sortable(query: function ($query, $direction) {
                        return $query->join('categories', 'menus.category_id', '=', 'categories.id')
                                     ->orderBy('categories.nama_kategori', $direction);
                    }),

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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
