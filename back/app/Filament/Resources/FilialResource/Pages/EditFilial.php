<?php

namespace App\Filament\Resources\FilialResource\Pages;

use App\Filament\Resources\FilialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFilial extends EditRecord
{
    protected static string $resource = FilialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
