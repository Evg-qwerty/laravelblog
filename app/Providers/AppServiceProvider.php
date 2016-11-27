<?php

namespace App\Providers;

use App\Model\Menu;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Menu $menuModel)
    {
	    // Регистрация виджетов в реестре
	    /** @var WidgetsRegistryInterface $widgetsRegistry */
	    $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];

	    foreach ($this->widgets as $widget) {
		    $widgetsRegistry->registerWidget($widget);
	    }

	    view()->share( 'menu',$menuModel->getMenu());
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
