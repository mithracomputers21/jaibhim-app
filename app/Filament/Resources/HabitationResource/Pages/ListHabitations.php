<?php

namespace App\Filament\Resources\HabitationResource\Pages;

use App\Filament\Resources\HabitationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHabitations extends ListRecords
{
    protected static string $resource = HabitationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
