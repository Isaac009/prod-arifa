<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Objective;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ObjectiveResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ObjectiveResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class ObjectiveResource extends Resource
{
    protected static ?string $model = Objective::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    protected static ?string $navigationGroup = 'Institute Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('objective')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('objective'),
                TextColumn::make('created_at')->sortable()->searchable()->date(),
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
            'index' => Pages\ListObjectives::route('/'),
            'create' => Pages\CreateObjective::route('/create'),
            'edit' => Pages\EditObjective::route('/{record}/edit'),
        ];
    }
}
