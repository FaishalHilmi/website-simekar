<?php

namespace App\Filament\Resources\CommerceResource\Pages;

use App\Filament\Resources\CommerceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommerces extends ListRecords
{
    protected static string $resource = CommerceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
