<?php

namespace App\Filament\Resources\ServiceCatResource\Pages;

use App\Filament\Resources\ServiceCatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceCats extends ListRecords
{
    protected static string $resource = ServiceCatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
