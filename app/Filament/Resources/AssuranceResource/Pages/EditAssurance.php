<?php

namespace App\Filament\Resources\AssuranceResource\Pages;

use App\Filament\Resources\AssuranceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssurance extends EditRecord
{
    protected static string $resource = AssuranceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
