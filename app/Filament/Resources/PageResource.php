<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
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
                Grid::make()
                    ->schema([
                        TextInput::make('title_1'),
                        TextInput::make('title_2'),
                    ]),
                Grid::make()
                    ->schema([
                        TextInput::make('subtitle_1'),
                        TextInput::make('subtitle_2'),
                    ]),

                FileUpload::make('image')
                    ->disk('do')
                    ->directory(function ($record) {
                        return 'jobs/pages'.($record?->id ? '/'.$record->id : '');
                    })
                    ->visibility('public'),

                TinyEditor::make('body')
                    ->fileAttachmentsDisk('do')
                    ->fileAttachmentsDirectory(function ($record) {
                        return 'jobs/pages'.($record?->id ? '/'.$record->id : '');
                    })
                    ->profile('full')
                    ->columnSpanFull()
                    ->minHeight(500),

                TinyEditor::make('summary')
                    ->fileAttachmentsDisk('do')
                    ->fileAttachmentsDirectory(function ($record) {
                        return 'jobs/pages'.($record?->id ? '/'.$record->id : '');
                    })
                    ->profile('full')
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('slug'),
                TextColumn::make('lang')
                    ->label('Language'),
                TextColumn::make('title_1')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title_2')
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\ReplicateAction::make()
                    ->beforeReplicaSaved(function (Page $replica) {
                        // make sure we get a unique slug using timestamp
                        $replica['slug'] = $replica['slug'].'-'.time();

                        return $replica;
                    }),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
