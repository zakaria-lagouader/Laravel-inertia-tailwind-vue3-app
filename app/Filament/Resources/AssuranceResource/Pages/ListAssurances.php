<?php

namespace App\Filament\Resources\AssuranceResource\Pages;

use App\Filament\Resources\AssuranceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssurances extends ListRecords
{
    protected static string $resource = AssuranceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
