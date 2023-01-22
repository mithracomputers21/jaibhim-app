<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Filament\Resources\MemberResource\RelationManagers\MemberPaymentsRelationManager;
use App\Filament\Resources\MemberResource\RelationManagers\MemberLibrariesRelationManager;
use App\Filament\Resources\MemberResource\Widgets\MemberStatsOverview;
use App\Models\Member;
use App\Models\District;
use App\Models\Block;
use App\Models\Village;
use App\Models\Habitation;
use App\Models\MemberLibrary;
use App\Models\MemberPayment;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('address')->required(),
                        TextInput::make('phone_number')->required(),
                        TextInput::make('email')->required(),
                        Select::make('plan_id')
                            ->relationship('plan', 'plan_name')->required(),
                        Select::make('type_id')
                            ->relationship('type', 'plan_type')->required(),
                        Select::make('event_id')
                            ->relationship('event', 'event_name'),
                        TextInput::make('notes')
                    ])->columns(2),
                    Card::make()
                        ->schema([
                            Repeater::make('member_libraries')
                                ->relationship('member_libraries')
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
                                        if($district) {
                                            return $district->blocks->pluck('block_name', 'id');
                                        }
                                        
                                    })
                                    ->reactive()
                                    ->afterStateUpdated(fn (callable $set) => $set('village_id', null)),
                                    Select::make('village_id')
                                    ->label('Village')
                                    ->options(function (callable $get){
                                        $block = Block::find($get('block_id'));
                                        if($block) {
                                            return $block->villages->pluck('village_name', 'id');
                                        }
                                        
                                    })
                                    ->reactive()
                                    ->afterStateUpdated(fn (callable $set) => $set('habitation_id', null)),
                                    Select::make('habitation_id')
                                    ->label('Habitation')
                                    ->options(function (callable $get){
                                        $village = Village::find($get('village_id'));
                                        if($village) {
                                            return $village->habitations->pluck('habitation_name', 'id');
                                        }
                                        
                                    })
                                    ->unique(ignoreRecord: true)
                                    ->reactive(),
                                    TextInput::make('contact_person_name')->required(),
                                    TextInput::make('contact_person_number')->required(),
                                    Toggle::make('library_available')->inline(false)->label('Is Library Available?'),
                                    TextInput::make('library_name')
                                ])
                                ->columns(3),
                        ]),
                    Card::make()
                    ->schema([
                        Repeater::make('member_payments')
                            ->relationship('member_payments')
                            ->schema([                               
                                Select::make('method_id')
                                ->relationship('method', 'payment_method')->required(),
                                DatePicker::make('payment_date')->required(),
                                TextInput::make('amount')
                                ->numeric()->required(),
                                TextInput::make('transaction_id')->required(),
                                TextInput::make('receipt_number')->required(),
                                FileUpload::make('attachment'),
                                Toggle::make('bank_status')->inline(false)->label('Is bank Status verified?'),
                                TextInput::make('verified_by'),
                                
                            ])->columns(3),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('phone_number')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('plan.plan_name')->label('Member Plan')->sortable()->searchable(),
                TextColumn::make('type.plan_type')->label('Member Type')->sortable()->searchable(),
                TextColumn::make('member_payments.amount')->label('Amount')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Join Date')->dateTime('d-m-Y')
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
            MemberLibrariesRelationManager::class,
            MemberPaymentsRelationManager::class,
        ];
    }
    
    public static function getWidgets() : array
    {
        return [
            MemberStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }   
    
    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }

}
