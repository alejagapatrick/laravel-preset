<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
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
        Filesystem::macro('make', function ($path) {
            return File::put($path, '');
        });

        Filesystem::macro('saveStream', function ($stream, $folder = '/', $disk = 'local') {
            file_put_contents($tempFile = tempnam(sys_get_temp_dir(), 'tempfile'), $stream);
            $filepath = Storage::disk($disk)->putFile($folder, new \Illuminate\Http\File($tempFile));
            unlink($tempFile);

            return $filepath;
        });

        Filesystem::macro('makeDirectoryIfNotExists', function ($path) {
            if (!File::exists($path)) {
                File::makeDirectory($path);

                return true;
            }

            return false;
        });

        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setlocale(config('app.locale'));

        Carbon::macro('toHumanDate', function () {
            return $this->format('d.m.Y');
        });

        Carbon::macro('toHumanDateTime', function () {
            return $this->format('d.m.Y H:i:s');
        });
    }
}
