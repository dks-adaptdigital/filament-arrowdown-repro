<?php

namespace App\Filament\Resources\DummyResource\Pages;

use App\Filament\Resources\DummyResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDummiesResource extends ManageRecords
{
    protected static string $resource = DummyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalWidth('xl')
                ->createAnother(false)
                ->label('Add New Dummy'),
        ];
    }
}
