<?php

namespace App\Filament\VendorPanel\Pages;

use Artificertech\FilamentMultiContext\Concerns\ContextualPage;
use Filament\Pages\Page;

class VendorDashboard extends Page
{
    use ContextualPage;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.vendor-dashboard';
    protected static ?string $slug = 'dashboard';
    function mount()
    {
        // dd(auth()->user());
    }
}
