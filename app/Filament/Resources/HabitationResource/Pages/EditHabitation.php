<?php

namespace App\Filament\Resources\HabitationResource\Pages;

use App\Filament\Resources\HabitationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHabitation extends EditRecord
{
    protected static string $resource = HabitationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
