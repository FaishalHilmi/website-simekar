<?php

namespace App\Filament\Resources\CommerceResource\Pages;

use App\Filament\Resources\CommerceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommerce extends EditRecord
{
    protected static string $resource = CommerceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return url('/admin/commerces');
    }
}
