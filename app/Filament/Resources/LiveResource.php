<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Live;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LiveResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LiveResource\RelationManagers;
use App\Filament\Resources\LiveResource\RelationManagers\ArtistsRelationManager;

class LiveResource extends Resource
{
    protected static ?string $model = Live::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';

    protected static ?string $navigationGroup = 'Live Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Create a Live')
                    ->description('Create a live over here!')
                    ->schema([
                        Forms\Components\TextInput::make('name')->required(),
                        Forms\Components\TextInput::make('venue')->required(),
                        Forms\Components\TextInput::make('totalticket')->numeric()->required(),
                        Forms\Components\TextInput::make('price')->numeric()->required(),
                    ])->columnSpan(2)->columns(2),
                Group::make()->schema([
                    Section::make("Date & Time")
                        ->collapsible()
                        ->schema([
                            Forms\Components\DatePicker::make('date')->required(),
                            Forms\Components\TimePicker::make('time')->required(),
                        ]),
                ]),
                Group::make()->schema([
                    Section::make("Related Artists")
                        ->collapsible()
                        ->schema([
                            Forms\Components\FileUpload::make('liveImg')->required()->columnSpan('full'),
                        ])->columnSpan(2)->columns(2),
                    Section::make("Related Artists")
                        ->collapsible()
                        ->schema([
                            Forms\Components\CheckboxList::make('artists')
                                ->relationship('artists', 'name')
                                ->searchable()
                        ])->columnSpan(2)->columns(2),                  
                ])->columnSpan(2)->columns(2),
                Group::make()->schema([
                    Section::make("Related Types")
                        ->collapsible()
                        ->schema([
                            Forms\Components\CheckboxList::make('types')
                                ->relationship('types', 'name')
                                ->searchable()
                        ])->columnSpan(2)->columns(2),
                    
                ])->columnSpan(1)->columns(1),
            ])->columns([
                'default' => 3,
                'sm' => 3,
                'md' => 3,
                'lg' => 3
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\ImageColumn::make('liveImg'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('venue')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('date')
                    ->date('j F, Y')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('time')
                    ->time('H:i')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('totalticket')
                    ->numeric()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('price')
                    ->toggleable(),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLives::route('/'),
            'create' => Pages\CreateLive::route('/create'),
            'edit' => Pages\EditLive::route('/{record}/edit'),
        ];
    }
}
