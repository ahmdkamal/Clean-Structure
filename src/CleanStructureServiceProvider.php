<?php

namespace Kamal\CleanStructure;

use Illuminate\Support\ServiceProvider;
use Kamal\CleanStructure\Middleware\Localization;

class CleanStructureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (!is_dir(base_path('app/Services/'))) {
            mkdir(base_path('app/Services/'));
            mkdir(base_path('app/Services/Classes'));
            mkdir(base_path('app/Services/Interfaces'));
        }
        if (!is_dir(base_path('app/Repositories/'))) {
            mkdir(base_path('app/Repositories/'));
            mkdir(base_path('app/Repositories/Classes'));
            mkdir(base_path('app/Repositories/Interfaces'));
        }
        $this->publishes([
            __DIR__.'/Models' => base_path('app/Models/'),
            __DIR__.'/Requests' => base_path('app/Http/Requests/'),
            __DIR__.'/Resources' => base_path('app/Http/Resources/'),
            __DIR__.'/clean-code.php' => config_path('clean-code.php'),
        ]);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
