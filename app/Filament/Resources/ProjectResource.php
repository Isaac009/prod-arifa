<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Project Management';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    TextInput::make('project_id')
                        ->required()
                        ->autofocus()
                        ->maxLength(255),
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Select::make('sponsor_id')
                    ->relationship(name: 'sponsor', titleAttribute: 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                ]),
                Section::make()
                ->schema([
                    Datepicker::make('from_date')
                    ->required(),
                    Datepicker::make('to_date')
                        ->required(),
                ])->columns(2),
                Section::make()
                ->schema([
                RichEditor::make('description')
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
                Section::make()
                ->schema([
                RichEditor::make('recommendations')
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
                Section::make()->schema([
                    FileUpload::make('project_image')
                    ->directory('project_photos')
                    ->preserveFilenames()
                    // ->multiple()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                ImageColumn::make('project_image'),
                TextColumn::make('title')->sortable()->searchable()->limit(30),
                TextColumn::make('sponsor.name')->sortable()->searchable(),
                TextColumn::make('from_date')->sortable()->searchable()->date(),
                TextColumn::make('to_date')->sortable()->searchable()->date(),
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
                            ->title('Project deleted')
                            ->body('The project has been deleted successfully.'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
