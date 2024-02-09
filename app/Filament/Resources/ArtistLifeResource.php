<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtistLifeResource\Pages;
use App\Filament\Resources\ArtistLifeResource\RelationManagers;
use App\Models\ArtistLife;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtistLifeResource extends Resource
{
    protected static ?string $model = ArtistLife::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Artists Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtistLives::route('/'),
            'create' => Pages\CreateArtistLife::route('/create'),
            'edit' => Pages\EditArtistLife::route('/{record}/edit'),
        ];
    }
}
