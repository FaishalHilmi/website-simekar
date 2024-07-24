<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UMKMResource\Pages;
use App\Filament\Resources\UMKMResource\RelationManagers;
use App\Models\UMKM;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UMKMResource extends Resource
{
    protected static ?string $model = UMKM::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpan('full'),
                TextInput::make('contact')
                    ->required()
                    ->columnSpan('full'),
                FileUpload::make('image')
                    ->required()
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->html()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('contact')
                    ->label('Contact')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUMKMS::route('/'),
            'create' => Pages\CreateUMKM::route('/create'),
            'edit' => Pages\EditUMKM::route('/{record}/edit'),
        ];
    }
}
