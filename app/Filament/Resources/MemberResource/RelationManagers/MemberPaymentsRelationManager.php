<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberPaymentsRelationManager extends RelationManager
{
    protected static string $relationship = 'member_payments';

    protected static ?string $recordTitleAttribute = 'amount';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('method_id')
                ->relationship('method', 'payment_method')->required(),
                DatePicker::make('payment_date')->required(),
                TextInput::make('amount')
                ->numeric()->required(),
                TextInput::make('transaction_id')->required(),
                TextInput::make('receipt_number')->required(),
                Toggle::make('bank_status')->inline(false)->label('Is bank Status verified?'),
                TextInput::make('verified_by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('method.payment_method')->label('Payment Method'),
                Tables\Columns\TextColumn::make('payment_date'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('transaction_id'),
                Tables\Columns\TextColumn::make('receipt_number'),
                Tables\Columns\TextColumn::make('bank_status'),
                Tables\Columns\TextColumn::make('verified_by'),
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
