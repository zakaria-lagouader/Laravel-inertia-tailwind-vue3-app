<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtisteResource\Pages;
use App\Filament\Resources\ArtisteResource\RelationManagers;
use App\Models\Artiste;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtisteResource extends Resource
{
    protected static ?string $model = Artiste::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required(),
                Forms\Components\TextInput::make('prenom')
                    ->required(),
                Forms\Components\TextInput::make('theme')
                    ->required(),
                Forms\Components\TextInput::make('origine')
                    ->required(),
                Forms\Components\TextInput::make('type_exposition')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('theme'),
                Tables\Columns\TextColumn::make('origine'),
                Tables\Columns\TextColumn::make('type_exposition'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListArtistes::route('/'),
            'create' => Pages\CreateArtiste::route('/create'),
            'edit' => Pages\EditArtiste::route('/{record}/edit'),
        ];
    }    
}
