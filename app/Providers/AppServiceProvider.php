<?php

namespace App\Providers;

use App\Models\Item;
use App\Models\Article;
use App\Observers\ItemObserver;
use App\Observers\ArticleObserver;
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
        Article::observe(ArticleObserver::class);
        Item::observe(ItemObserver::class);
    }
}
