<?php

namespace App\Filament\Resources\ArtistLifeResource\Pages;

use App\Filament\Resources\ArtistLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtistLife extends EditRecord
{
    protected static string $resource = ArtistLifeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
