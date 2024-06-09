<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Publication;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Filament\Resources\PublicationResource\Pages\EditPublication;
use App\Filament\Resources\PublicationResource\Pages\ListPublications;
use App\Filament\Resources\PublicationResource\Pages\CreatePublication;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Publication Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Publication Details')
                ->description('Provide the publication details here.')
                ->schema([
                    Select::make('publication_type_id')
                    ->label('Publication Category/Type')
                    ->relationship(name: 'PublicationType', titleAttribute: 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                    Select::make('publication_tag_id')
                    ->relationship(name: 'publicationTag', titleAttribute: 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                    TextInput::make('title')
                        ->label('Publication Title')
                        ->required()
                        ->autofocus()
                        ->maxLength(255),
                    Datepicker::make('published_on')
                        ->label('Publication Date')
                        ->required(),
                    FileUpload::make('image')
                        ->label('Publication Photo')
                        ->uploadingMessage('Uploading publication photo...')
                        ->imageEditor()
                        ->preserveFilenames()
                        ->directory('images')
                        ->image(),
                    ])->columns(2)
                ,
                Section::make()
                    ->schema([
                    RichEditor::make('content')
                        ->label('Publication Content')
                        ->required()
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
                    FileUpload::make('attachments')
                        ->label('Attachments')
                        ->uploadingMessage('Uploading publications resources (Multiple attachments allowed)')
                        ->directory('attachments')
                        ->multiple()
                        ->storeFileNamesIn('attachments')
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title'),
                TextColumn::make('publicationType.name')->sortable()->searchable(),
                TextColumn::make('publicationTag.name')->sortable()->searchable(),
                TextColumn::make('published_on')->sortable()->searchable()->date(),
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
