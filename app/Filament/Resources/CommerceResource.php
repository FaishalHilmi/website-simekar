<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Commerce;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CommerceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CommerceResource\RelationManagers;
use Filament\Forms\Components\RichEditor;

class CommerceResource extends Resource
{
    protected static ?string $model = Commerce::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralLabel = 'Wirausaha';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->placeholder('Masukkan judul produk')
                    ->columnSpan('full'),
                TextInput::make('contact')
                    ->label('No. Whatsapp')
                    ->numeric()
                    ->placeholder('628556612080')
                    ->required(),
                TextInput::make('link_maps')
                    ->label("Link Maps")
                    ->placeholder('https://maps.app.goo.gl/*****')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->placeholder('Masukkan deskripsi produk')
                    ->columnSpan('full'),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->multiple()
                    ->placeholder('Unggah gambar produk')
                    ->columnSpan('full'),
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
                TextColumn::make('contact')
                    ->label('No. Whatsapp')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('link_maps')
                    ->label('Link Maps')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->html()
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
            'index' => Pages\ListCommerces::route('/'),
            'create' => Pages\CreateCommerce::route('/create'),
            'edit' => Pages\EditCommerce::route('/{record}/edit'),
        ];
    }
}
