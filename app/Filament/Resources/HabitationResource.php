<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HabitationResource\Pages;
use App\Filament\Resources\HabitationResource\RelationManagers;
use App\Models\Habitation;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HabitationResource extends Resource
{
    protected static ?string $model = Habitation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'System Settings';
 
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('habitation_name'),
                        Select::make('village_id')
                            ->relationship('village', 'village_name')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('habitation_name')->sortable()->searchable(),
                TextColumn::make('village.village_name')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHabitations::route('/'),
            'create' => Pages\CreateHabitation::route('/create'),
            'edit' => Pages\EditHabitation::route('/{record}/edit'),
        ];
    }    
}
