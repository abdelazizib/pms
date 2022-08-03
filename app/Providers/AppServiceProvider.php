<?php

namespace App\Providers;

use App\Models\Messages;
use Illuminate\Pagination\Paginator;
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
        $MessagesCount = Messages::where('status', 0)->get()->count();            
        view()->share('messagesCount', $MessagesCount);

        Paginator::useBootstrap();
    }
}
