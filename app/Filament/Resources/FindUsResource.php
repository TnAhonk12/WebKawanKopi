<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\FindUs;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\View;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\HtmlColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\FindUsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FindUsResource\RelationManagers;


class FindUsResource extends Resource
{
    protected static ?string $model = FindUs::class;

    protected static ?string $navigationLabel = 'Find Us';
    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_tempat')->required(),

                TextArea::make('maps')
                    ->label('Embed Map')
                    ->required()
                    ->rows(5)
                    ->helperText('Paste the embed code for your map here.'),
        
                FileUpload::make('foto')
                    ->label('Foto Utama')
                    ->image()
                    ->directory('find-us-utama')
                    ->saveUploadedFileUsing(function ($file) {
                        // Inisialisasi ImageManager dengan driver GD
                        $manager = new ImageManager(new Driver());

                        // Baca dan konversi gambar ke format WebP
                        $image = $manager->read($file)->toWebp(80);

                        // Buat nama file unik
                        $filename = 'finduses/' . uniqid() . '.webp';

                        // Simpan gambar ke storage
                        Storage::disk('public')->put($filename, (string) $image);

                        return $filename;
                    }),
                    
                Repeater::make('photos')
                    ->relationship()
                    ->label('Foto Tambahan')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Foto')
                            ->image()
                            ->directory('find-us-photos')
                            ->saveUploadedFileUsing(function ($file) {
                                // Inisialisasi ImageManager dengan driver GD
                                $manager = new ImageManager(new Driver());
        
                                // Baca dan konversi gambar ke format WebP
                                $image = $manager->read($file)->toWebp(80);
        
                                // Buat nama file unik
                                $filename = 'findusesp/' . uniqid() . '.webp';
        
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
                TextColumn::make('nama_tempat')
                    ->label('Nama Tempat')
                    ->searchable(),
            
                ViewColumn::make('maps')
                    ->label('Peta')
                    ->view('component.map-preview')
                    ->getStateUsing(fn ($record) => $record->maps),

                ImageColumn::make('foto')
                    ->label('Foto Utama')
                    ->size(230)
                    ->defaultImageUrl(url('/storage/find-us-photos/download.png')) // tampilkan gambar default jika null
                    ->url(fn ($record) => $record->foto ? asset('storage/' . $record->foto) : null),
        
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
            'index' => Pages\ListFindUs::route('/'),
            'create' => Pages\CreateFindUs::route('/create'),
            'edit' => Pages\EditFindUs::route('/{record}/edit'),
        ];
    }
}
