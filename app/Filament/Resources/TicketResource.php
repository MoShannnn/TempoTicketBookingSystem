<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ticket;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TicketResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TicketResource\RelationManagers;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $navigationGroup = 'Ticket Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                                ->relationship('user', 'name'),
                Forms\Components\Select::make('live_id')
                                ->relationship('live', 'name'),
                Forms\Components\TextInput::make('quantity')->numeric(),
                Forms\Components\TextInput::make('total_price')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('live.liveImg'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Username')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('live.name')
                    ->label('Live Name')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('live.venue')
                    ->label('Venue')
                    ->searchable(),
                Tables\Columns\TextColumn::make('live.date')
                    ->label('Date')
                    ->date('j F, Y')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('live.time')
                    ->label('Time')
                    ->time('H:i')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->toggleable(),
                // Tables\Columns\DateColumn::make('created_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('Download Pdf')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn(Ticket $record)  => route('ticket.pdf.download', $record))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
