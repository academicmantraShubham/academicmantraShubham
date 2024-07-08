<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Homepage;
use App\Models\Calculator;
use Illuminate\Support\Facades\Cache;
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
        view()->composer(['errors::404','errors::500'], function($view)
        {
            $data['calculators'] = Calculator::whereNotNull('place')->get();
            $data['team'] = Homepage::wherePage('team')->with('subHomepages')->get();
            $data['menus'] =  Cache::remember('menus', 60, function () {
                return Menu::with('subMenus.subMenus.subMenus')->orderBy('position', 'ASC')->whereParentId(0)->whereIsPage(0)->whereStatus(1)->get(['id', 'title', 'slug', 'content']);
            });
            $data['subscribeus'] =  Cache::remember('subscribeus', 60, function () {
                return Homepage::wherePage('subscribe us')->first();
            });
            $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->get();
            $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->get();
            $data['logo'] = Homepage::select(['image', 'alt'])->wherePage('logo')->first();
            $data['footerdata'] = Homepage::wherePage('footer data')->first();
            $data['pages'] = Cache::remember('pages', 60, function () {
                return Menu::orderBy('position', 'ASC')->whereParentId(0)->whereIsPage(1)->get(['id', 'title', 'slug', 'content']);
            });
            $view->with($data);
        });
    }
}
