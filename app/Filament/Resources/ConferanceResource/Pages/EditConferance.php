<?php

namespace App\Filament\Resources\ConferanceResource\Pages;

use App\Filament\Resources\ConferanceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConferance extends EditRecord
{
    protected static string $resource = ConferanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
