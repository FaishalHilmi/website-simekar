<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationsResource\Pages;
use App\Filament\Resources\OrganizationsResource\RelationManagers;
use App\Models\Organizations;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationsResource extends Resource
{
    protected static ?string $model = Organizations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required(),
                Select::make('jabatan')->options([
                    'Kepala Desa' => 'Kepala Desa',
                    'Sekretaris Desa' => 'Sekretaris Desa',
                    'Kepala Dusun 1' => 'Kepala Dusun 1',
                    'Kepala Dusun 2' => 'Kepala Dusun 2',
                    'Kepala Dusun 3' => 'Kepala Dusun 3',
                    'Kepala Dusun 4' => 'Kepala Dusun 4',
                    'Kepala Dusun 5' => 'Kepala Dusun 5',
                    'Kepala Dusun 6' => 'Kepala Dusun 6',
                    'Kepala Dusun 7' => 'Kepala Dusun 7',
                    'Kepala Dusun 8' => 'Kepala Dusun 8',
                    'Kepala Dusun 9' => 'Kepala Dusun 9',
                ])
                    ->required(),
                FileUpload::make('image')
                    ->required()
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->label('Jabatan')
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
            'index' => Pages\ListOrganizations::route('/'),
            'create' => Pages\CreateOrganizations::route('/create'),
            'edit' => Pages\EditOrganizations::route('/{record}/edit'),
        ];
    }
}
