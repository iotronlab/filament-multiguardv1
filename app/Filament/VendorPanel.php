<?php

namespace App\Filament;

use App\Http\Middleware\VendorAuthMiddleware;
use Artificertech\FilamentMultiContext\ContextManager;

class VendorPanel extends ContextManager
{
    protected static ?array $authMiddleware = [
        VendorAuthMiddleware::class
    ];

    protected static ?string $auth = 'vendor';

    protected static ?string $path = 'vendor';
}
