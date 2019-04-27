<?php

namespace E2Consult\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::cleanDirectories();
        static::updatePackages();
        static::updateScripts();
        static::updateSassFile();
        static::updateEnvExampleFile();
        static::updateViewsFiles();
        static::updateLaravelRoutes();
        static::createWelcomeController();
        static::updateAppServiceProvider();
        static::updateModelsDirectory();
        static::updateWebpackConfig();
        static::updateLanguageFiles();
        static::installTailwind();
    }

    public static function cleanDirectories()
    {
        File::cleanDirectory(resource_path('sass'));
        File::cleanDirectory(resource_path('js/components'));
        File::cleanDirectory(resource_path('views'));
    }

    public static function updatePackageArray($packages)
    {
        return [
            'moment' => '^2.24.0',
            'tailwindcss' => '^0.7.4',
            'laravel-mix-tailwind' => '^0.1.0',
        ] + Arr::except($packages, [
            'popper.js',
            'lodash',
            'jquery',
            'bootstrap',
        ]);
    }

    public static function updateScripts()
    {
        copy(__DIR__.'/stubs/js/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/stubs/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    public static function updateSassFile()
    {
        File::copyDirectory(__DIR__.'/stubs/sass/', resource_path('sass'));
    }

    public static function updateLanguageFiles()
    {
        File::copyDirectory(__DIR__.'/no/', resource_path('lang/no/'));
    }

    public static function updateEnvExampleFile()
    {
        copy(__DIR__.'/stubs/.env.example', base_path('.env.example'));
    }

    public static function updateViewsFiles()
    {
        if (!File::exists($path = resource_path('views/layouts/'))) {
            File::makeDirectory($path);
        }
        copy(__DIR__.'/stubs/views/app.blade.php', resource_path('views/layouts/app.blade.php'));
        copy(__DIR__.'/stubs/views/nav.blade.php', resource_path('views/layouts/nav.blade.php'));
        copy(__DIR__.'/stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    public static function updateLaravelRoutes()
    {
        copy(__DIR__.'/stubs/web.php', base_path('routes/web.php'));
    }

    public static function createWelcomeController()
    {
        copy(__DIR__.'/stubs/WelcomeController.php', base_path('app/Http/Controllers/WelcomeController.php'));
    }

    public static function updateAppServiceProvider()
    {
        copy(__DIR__.'/stubs/AppServiceProvider.php', app_path('Providers/AppServiceProvider.php'));
    }

    public static function updateModelsDirectory()
    {
        File::copyDirectory(__DIR__.'/stubs/Models/', app_path('/Models/'));
        copy(
            __DIR__.'/stubs/Migrations/2014_10_12_000000_create_users_table.php',
            base_path('database/migrations/2014_10_12_000000_create_users_table.php')
        );
        if (File::exists($path = app_path('User.php'))) {
            unlink(app_path('User.php'));
        }
        copy(__DIR__.'/stubs/auth.php', base_path('config/auth.php'));
    }

    public static function updateWebpackConfig()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function installTailwind()
    {
        shell_exec('npm install');
        copy(__DIR__.'/stubs/tailwind.js', base_path('tailwind.js'));
        shell_exec('node_modules/.bin/tailwind init tailwind.js');
        shell_exec('npm run dev');
    }
}
