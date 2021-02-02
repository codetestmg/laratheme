<?php

namespace App\Providers;

use App\Helpers\CustomTheme;
use Illuminate\Support\ServiceProvider;
use Shipu\Themevel\Contracts\ThemeContract;
use Shipu\Themevel\Facades\Theme;

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

        $this->app->bind(ThemeContract::class, function(){
            return new CustomTheme($this->app,$this->app['view']->getFinder(), $this->app['config'], $this->app['translator']);
        });
       // dd( $this->app);
        //__construct(Container $app, ViewFinderInterface $finder, Repository $config, Translator $lang)
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Theme::set('grand');
    }
}
