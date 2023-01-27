<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManifestationResource\Pages;
use App\Filament\Resources\ManifestationResource\RelationManagers;
use App\Models\Manifestation;
use App\Models\Oeuvre;
use App\Models\Salle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManifestationResource extends Resource
{
    protected static ?string $model = Manifestation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('oeuvre_id')
                    ->label('Oeuvre')
                    ->options(Oeuvre::all()->pluck('nom', 'id'))
                    ->required(),
                Forms\Components\Select::make('salle_id')
                    ->label('Salle')
                    ->options(Salle::all()->pluck('numero', 'id'))
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('titre')
                    ->required(),
                Forms\Components\DateTimePicker::make('date_debut')
                    ->required(),
                Forms\Components\DateTimePicker::make('date_fin')
                    ->required(),
                Forms\Components\TextInput::make('theme')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('oeuvre.nom'),
                Tables\Columns\TextColumn::make('salle.numero'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('titre'),
                Tables\Columns\TextColumn::make('date_debut')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('date_fin')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('theme'),
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
            'index' => Pages\ListManifestations::route('/'),
            'create' => Pages\CreateManifestation::route('/create'),
            'edit' => Pages\EditManifestation::route('/{record}/edit'),
        ];
    }    
}
