<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Title;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TitleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TitleResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class TitleResource extends Resource
{
    protected static ?string $model = Title::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_key')
                    ->required()
                    ->unique()
                    ->maxLength(10),
                TextInput::make('title')
                ->label('Member\'s Title')
                    ->required()
                    ->unique()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_key')->searchable()->sortable(),
                TextColumn::make('title')->searchable()
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
            'index' => Pages\ListTitles::route('/'),
            'create' => Pages\CreateTitle::route('/create'),
            'edit' => Pages\EditTitle::route('/{record}/edit'),
        ];
    }
}
