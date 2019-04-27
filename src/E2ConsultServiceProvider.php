<?php

namespace E2Consult\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class E2ConsultServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('e2consult', function ($command) {
            Preset::install();
            $command->info('All finished! Please compile your assets. Then you are all set to go!');
        });
    }
}
