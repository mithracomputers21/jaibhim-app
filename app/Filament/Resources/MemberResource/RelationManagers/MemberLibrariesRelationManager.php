<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use App\Models\Member;
use App\Models\District;
use App\Models\Block;
use App\Models\Village;
use App\Models\Habitation;
use App\Models\MemberLibrary;
use App\Models\MemberPayment;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberLibrariesRelationManager extends RelationManager
{
    protected static string $relationship = 'member_libraries';

    protected static ?string $recordTitleAttribute = 'contact_person_name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('district_id')
                ->label('District')
                ->options(District::all()->pluck('district_name', 'id')->toArray())
                ->reactive()
                ->afterStateUpdated(fn (callable $set) => $set('block_id', null)),
                Select::make('block_id')
                ->label('Block')
                ->options(function (callable $get){
                    $district = District::find($get('district_id'));
                    if(! $district) {
                        return Block::all()->pluck('block_name', 'id');
                    }
                    return $district->blocks->pluck('block_name', 'id');
                })
                ->reactive()
                ->afterStateUpdated(fn (callable $set) => $set('village_id', null)),
                Select::make('village_id')
                ->label('Village')
                ->options(function (callable $get){
                    $block = Block::find($get('block_id'));
                    if(! $block) {
                        return Village::all()->pluck('village_name', 'id');
                    }
                    return $block->villages->pluck('village_name', 'id');
                })
                ->reactive()
                ->afterStateUpdated(fn (callable $set) => $set('habitation_id', null)),
                Select::make('habitation_id')
                ->label('Habitation')
                ->options(function (callable $get){
                    $village = Village::find($get('village_id'));
                    if(! $village) {
                        return Habitation::all()->pluck('habitation_name', 'id');
                    }
                    return $village->habitations->pluck('habitation_name', 'id');
                }),
                TextInput::make('contact_person_name')->required(),
                TextInput::make('contact_person_number')->required(),
                Toggle::make('library_available')->inline(false)->label('Is Library Available?'),
                TextInput::make('library_name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('member.name'),
                Tables\Columns\TextColumn::make('district.district_name'),
                Tables\Columns\TextColumn::make('block.block_name'),
                Tables\Columns\TextColumn::make('village.village_name'),
                Tables\Columns\TextColumn::make('habitation.habitation_name'),
                Tables\Columns\TextColumn::make('contact_person_name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
