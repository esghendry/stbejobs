<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Models\Lead;
use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'sm' => 2,
                    'xl' => 3,
                ])
                    ->schema([
                        Select::make('status')
                            ->options([
                                'new' => 'New',
                                'process' => 'Process',
                                'processed' => 'Processed',
                            ]),
                        TextInput::make('source')->disabled(),
                        Select::make('user_id')
                            ->options(User::all()->pluck(['name'], 'id'))
                            ->searchable(),
                    ]),
                Grid::make([
                    'sm' => 2,
                ])
                    ->schema([
                        TextInput::make('first_name'),
                        TextInput::make('last_name'),
                        TextInput::make('email'),
                        TextInput::make('phone'),
                    ]),

                // TODO::attachments
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('source'),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('status')
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'warning',
                        'process' => 'warning',
                        'processed' => 'success',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'new' => 'heroicon-o-question-mark-circle',
                        'process' => 'heroicon-o-minus',
                        'processed' => 'heroicon-o-check',
                    }),
                TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}
