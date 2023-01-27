<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConferanceResource\Pages;
use App\Filament\Resources\ConferanceResource\RelationManagers;
use App\Models\Conferance;
use App\Models\Salle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConferanceResource extends Resource
{
    protected static ?string $model = Conferance::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('salle_id')
                    ->label('Salle')
                    ->options(Salle::all()->pluck('numero', 'id'))
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('conferencier')
                    ->required(),
                Forms\Components\Textarea::make('sujet')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('salle.numero'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('conferencier'),
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
            'index' => Pages\ListConferances::route('/'),
            'create' => Pages\CreateConferance::route('/create'),
            'edit' => Pages\EditConferance::route('/{record}/edit'),
        ];
    }    
}
