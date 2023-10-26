<?php

namespace App\Filament\Resources\ServiceCatResource\Pages;

use App\Filament\Resources\ServiceCatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceCat extends EditRecord
{
    protected static string $resource = ServiceCatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
