<?php

namespace App\Filament\Resources\ArtistLifeResource\Pages;

use App\Filament\Resources\ArtistLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtistLives extends ListRecords
{
    protected static string $resource = ArtistLifeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
