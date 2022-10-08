<?php

namespace App\Providers;

use App\Filament\VendorPanel;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::getContext(VendorPanel::class)->serving(function () {
            $currentInstance = Filament::context(true);
            // dd($currentInstance);
            if ($currentInstance instanceof VendorPanel) {
                Filament::getContext(VendorPanel::class)->registerUserMenuItems([
                    // ...
                    'logout' => UserMenuItem::make()->label('Log Out')->url(route('vendor.logout')),
                ]);
            }
        });
    }
}
