<?php

namespace Kamal\CleanStructure;

use Illuminate\Support\ServiceProvider;

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
        $this->publishes([
            __DIR__.'/Models' => base_path('app/Models/'),
            __DIR__.'/Requests' => base_path('app/Http/Requests/'),
            __DIR__.'/Resources' => base_path('app/Http/Resources/'),
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
