<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
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
        $this->Language();
    }

    protected function Language()
    {
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
            // Arabic Language
            if ($lang == 'ar')
                App::setlocale('ar');
            // Hebrew Language
            else if ($lang == 'en')
                App::setlocale('en');

            // Default Language
            else
                App::setlocale('en');
        } else
            App::setlocale('en');
    }
}
