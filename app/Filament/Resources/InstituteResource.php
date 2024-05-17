<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Institute;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\InstituteResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InstituteResource\RelationManagers;
use App\Filament\Resources\InstituteResource\Pages\EditInstitute;
use App\Filament\Resources\InstituteResource\Pages\ListInstitutes;
use App\Filament\Resources\InstituteResource\Pages\CreateInstitute;

class InstituteResource extends Resource
{
    protected static ?string $model = Institute::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'Institute Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->autofocus()
                        ->maxLength(90),
                    TextInput::make('email')
                        ->required()
                        ->email()
                        ->maxLength(90),
                    TextInput::make('phone')
                        ->required()
                        ->maxLength(90),
                    TextInput::make('address')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('map_address')
                        ->required()
                        ->maxLength(255),
                ])->columns(2),
                Section::make()
                ->schema([
                    TextInput::make('about')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('mission')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('vision')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('values')
                        ->required()
                        ->maxLength(255),
                ])->columns(2),

                Section::make()
                ->schema([
                    TextInput::make('facebook')
                        ->maxLength(255),
                    TextInput::make('x')
                        ->maxLength(255),
                    TextInput::make('instagram')
                        ->maxLength(255),
                    TextInput::make('linkedin')
                        ->maxLength(255),
                    TextInput::make('youtube')
                        ->maxLength(255),
                ])->columns(3),
                Section::make()
                ->schema([
                    FileUpload::make('logo_url')
                        ->directory('images')
                        ->preserveFilenames()
                        ->image()
                        ->imageEditor()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                ImageColumn::make('logo_url'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                ViewAction::make(),
                DeleteAction::make()
                    ->successNotification(
                    Notification::make()
                            ->success()
                            ->title('User deleted')
                            ->body('The user has been deleted successfully.'),
                    )
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
            'index' => Pages\ListInstitutes::route('/'),
            'create' => Pages\CreateInstitute::route('/create'),
            'edit' => Pages\EditInstitute::route('/{record}/edit'),
        ];
    }
}
