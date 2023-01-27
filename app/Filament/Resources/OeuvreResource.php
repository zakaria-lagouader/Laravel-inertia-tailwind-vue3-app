<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OeuvreResource\Pages;
use App\Filament\Resources\OeuvreResource\RelationManagers;
use App\Models\Assurance;
use App\Models\Oeuvre;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OeuvreResource extends Resource
{
    protected static ?string $model = Oeuvre::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('assurance_id')
                    ->label('Assurance')
                    ->options(Assurance::all()->pluck('numero', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('nom')
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->required(),
                Forms\Components\TextInput::make('proprietaire')
                    ->required(),
                Forms\Components\TextInput::make('prix')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('origin')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('assurance.numero'),
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('proprietaire'),
                Tables\Columns\TextColumn::make('prix'),
                Tables\Columns\TextColumn::make('origin'),
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
            'index' => Pages\ListOeuvres::route('/'),
            'create' => Pages\CreateOeuvre::route('/create'),
            'edit' => Pages\EditOeuvre::route('/{record}/edit'),
        ];
    }    
}
