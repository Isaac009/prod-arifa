<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\Pages\EditEvent;
use App\Filament\Resources\EventResource\Pages\ListEvents;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Filament\Resources\EventResource\Pages\CreateEvent;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('topic')
                ->label('Event Activity/Topic/Training')
                ->placeholder('Enter the event topic')
                ->required(),
                DatePicker::make('from')
                    ->label('Start Date')
                    ->placeholder('Select the start date')
                    ->required(),
                DatePicker::make('to')
                    ->label('End Date')
                    ->placeholder('Select the end date')
                    ->required(),
                TimePicker::make('start_time')
                    ->label('Start Time')
                    ->placeholder('Select the start time')
                    ->required(),
                TimePicker::make('end_time')
                    ->label('End Time')
                    ->placeholder('Select the end time')
                    ->required(),
                Section::make()
                    ->schema([
                    RichEditor::make('description')
                        ->required()
                        ->toolbarButtons([
                            'attachFiles',
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('topic'),
                TextColumn::make('from')->sortable()->searchable()->date(),
                TextColumn::make('to')->sortable()->searchable()->date(),
                TextColumn::make('start_time')->sortable()->searchable(),
                TextColumn::make('end_time')->sortable()->searchable(),
                // TextColumn::make('address')->sortable()->searchable(),
                // TextColumn::make('date_of_birth')->sortable()->searchable()->date(),
                // TextColumn::make('joined_since')->sortable()->searchable()->date(),
                // TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
