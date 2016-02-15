<?php

namespace YK\Vishnu\Providers;

use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Support\ServiceProvider;
use Acacha\AdminLTETemplateLaravel\Facades\AdminLTE;

class VishnuServiceProvider extends ServiceProvider
{
    use AppNamespaceDetectorTrait;

    /**
     * Register a application service.
     */
    public function register()
    {
        if (!defined('VISHNU_PATH')) {
            define('VISHNU_PATH', realpath(__DIR__.'/../../'));
        }

        $this->app->bind('Vishnu', function () {
            return new \YK\Vishnu\Vishnu();
        });
    }

    /**
     * Bootstrap the application service.
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->defineRoutes();
        });

        $this->publishes(Vishnu::controllers(), 'vishnu');
    }

    /**
     * Define Vishnu routes.
     */
    public function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => $this->getAppNamespace().'Http\Controllers\Vishnu'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }
}
