<?php

namespace App\Filament\Resources\TypeLiveResource\Pages;

use App\Filament\Resources\TypeLiveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeLive extends EditRecord
{
    protected static string $resource = TypeLiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
