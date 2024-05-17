<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\City;
use Filament\Tables;
use App\Models\State;
use App\Models\Member;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Info')
                ->description('Provide the user basic information here.')
                ->schema([
                    Select::make('titles')
                    ->required()
                    ->multiple()
                    ->options(['Adv.'=>'Advocate' ,'Mr.'=>'Mr.', 'Hon.'=>'Honorable',
                    'Mrs.'=>'Mrs.', 'Dr.'=>'Doctor', 'Eng.'=>'Engineer', 'Prof.'=>'Professor',
                    'Sir.'=>'Sir','Research Assistant'=>'Research Assistant']),
                TextInput::make('name')
                    ->required()
                    ->autofocus()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Datepicker::make('date_of_birth')
                    ->required(),
                Datepicker::make('joined_since')
                    ->required(),
                ])->columns(2)
                ,
                Section::make('User Address')
                ->description('Provide the user address details here.')
                ->schema([
                    TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Select::make('country_id')
                    ->label('Country')
                    ->relationship(name: 'country', titleAttribute: 'name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (Set $set) { $set('state_id', null);
                        $set('city_id', null);})
                    ->required(),
                Select::make('state_id')
                    ->label('State')
                    ->options(fn (Get $get): Collection => State::query()
                    ->where('country_id', $get('country_id'))
                    ->pluck('name', 'id'))
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('city_id', null))
                    ->searchable()
                    ->preload(),
                Select::make('city_id')
                    ->label('City')
                    ->options(fn (Get $get): Collection => City::query()
                    ->where('state_id', $get('state_id'))
                    ->pluck('name', 'id'))
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('zip_code')
                    ->required(),
                ])->columns(3)
                ,
                Section::make()
                    ->schema([
                    RichEditor::make('bio')
                        ->toolbarButtons([
                            'blockquote',
                            'bold',
                            'bulletList',
                            'h2',
                            'h3',
                            'italic',
                            'orderedList',
                            'redo',
                            'underline',
                            'undo',
                        ]),
                    FileUpload::make('profile_photo_url')
                        ->label('Profile Photo')
                        ->uploadingMessage('Uploading user profile picture...')
                        ->imageEditor()
                        ->preserveFilenames()
                        ->directory('images')
                        ->image()
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo_url'),
                TextColumn::make('titles'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
                TextColumn::make('date_of_birth')->sortable()->searchable()->date(),
                TextColumn::make('joined_since')->sortable()->searchable()->date(),
                TextColumn::make('created_at')->dateTime()
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
