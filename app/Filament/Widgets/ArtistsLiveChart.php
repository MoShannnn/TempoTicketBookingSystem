<?php

namespace App\Filament\Widgets;

use App\Models\Artist;
use App\Models\Ticket;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class ArtistsLiveChart extends ChartWidget
{
    protected static ?string $heading = 'Ticket Selling Chart';

    protected static string $color = 'warning';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = Trend::model(Ticket::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();
 
        return [
            'datasets' => [
                [
                    'label' => 'Ticket Selling Line',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
