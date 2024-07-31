<?php

namespace App\Filament\Resources\CommerceResource\Pages;

use App\Filament\Resources\CommerceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCommerce extends CreateRecord
{
    protected static string $resource = CommerceResource::class;

    protected function getRedirectUrl(): string
    {
        return url('/admin/commerces');
    }
}
