<?php

namespace App\Providers;

use App\Http\ViewComposers\ActivityComposer;
use App\Models\Service;
use App\Observers\ServiceObserver;
use App\Services\Counter;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Blade::aliasComponent('core.components.badge', 'badge');
        Blade::aliasComponent('core.components.tag', 'Tag');

        view()->composer('core.layout', ActivityComposer::class);

        Service::observe(ServiceObserver::class);

//        $this->app->bind(Counter::class, function ($app){
//            return new Counter(env('COUNTER_TIMEOUT'));
//        });

        $this->app->singleton(Counter::class, function ($app){
            return new Counter(env('COUNTER_TIMEOUT'));
        });
        
//        $this->app->when(Counter::class)->needs('$timeout')->give(env('COUNTER_TIMEOUT'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
