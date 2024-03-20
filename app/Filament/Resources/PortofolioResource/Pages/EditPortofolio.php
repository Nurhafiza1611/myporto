<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use Filament\Actions;
use App\Models\portofolio;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PortofolioResource;

class EditPortofolio extends EditRecord
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(portofolio $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }

                }
            ),
        ];
    }
}
