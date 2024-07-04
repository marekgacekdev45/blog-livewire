<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total',User::count())
        ];
    }
}
