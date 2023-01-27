<?php

namespace App\Filament\Resources\OeuvreResource\Pages;

use App\Filament\Resources\OeuvreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOeuvres extends ListRecords
{
    protected static string $resource = OeuvreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
