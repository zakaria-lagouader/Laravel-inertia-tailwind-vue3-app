<?php

namespace App\Filament\Resources\ManifestationResource\Pages;

use App\Filament\Resources\ManifestationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManifestations extends ListRecords
{
    protected static string $resource = ManifestationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
