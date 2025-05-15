<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\RoasteryCategory;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoasteryCategoryResource\Pages;
use App\Filament\Resources\RoasteryCategoryResource\RelationManagers;

class RoasteryCategoryResource extends Resource
{
    protected static ?string $model = RoasteryCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_roastery')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255),
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
            TextColumn::make('nama_roastery')->label('Nama Kategori')->searchable(),
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
            'index' => Pages\ListRoasteryCategories::route('/'),
            'create' => Pages\CreateRoasteryCategory::route('/create'),
            'edit' => Pages\EditRoasteryCategory::route('/{record}/edit'),
        ];
    }
}
