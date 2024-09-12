<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    protected static bool $canCreateAnother = false;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make('slug'),
                        Select::make('lang')
                            ->label('Language')
                            ->helperText('Select the language of this page')
                            ->default('nl')
                            ->options([
                                'nl' => 'Dutch',
                                'en' => 'English',
                            ]),
                    ]),
            ]);
    }
}
