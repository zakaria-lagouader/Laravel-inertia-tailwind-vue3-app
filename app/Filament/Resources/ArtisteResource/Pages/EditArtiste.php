<?php

namespace App\Filament\Resources\ArtisteResource\Pages;

use App\Filament\Resources\ArtisteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtiste extends EditRecord
{
    protected static string $resource = ArtisteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
