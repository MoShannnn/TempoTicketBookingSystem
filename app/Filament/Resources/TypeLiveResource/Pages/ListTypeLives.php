<?php

namespace App\Filament\Resources\TypeLiveResource\Pages;

use App\Filament\Resources\TypeLiveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeLives extends ListRecords
{
    protected static string $resource = TypeLiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
