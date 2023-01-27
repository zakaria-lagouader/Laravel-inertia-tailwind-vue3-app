<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvenementResource\Pages;
use App\Filament\Resources\EvenementResource\RelationManagers;
use App\Models\Evenement;
use App\Models\Salle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvenementResource extends Resource
{
    protected static ?string $model = Evenement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('salle_id')
                    ->label('Salle')
                    ->options(Salle::all()->pluck('numero', 'id'))
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        "Visite" => "Visite",
                        "Conférence" => "conférence"
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('salle.numero'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
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
            'index' => Pages\ListEvenements::route('/'),
            'create' => Pages\CreateEvenement::route('/create'),
            'edit' => Pages\EditEvenement::route('/{record}/edit'),
        ];
    }    
}
