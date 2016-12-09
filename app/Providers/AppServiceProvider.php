<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{

	protected $widgets = [
		\App\Widgets\DashboardMap::class,
		\App\Widgets\NavigationUserBlock::class
	];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
	    // Регистрация виджетов в реестре
	    /** @var WidgetsRegistryInterface $widgetsRegistry */
	    $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];

	    foreach ($this->widgets as $widget) {
		    $widgetsRegistry->registerWidget($widget);
	    }

	    // share data for all view
	    view()->share( 'url',$request->path());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
