<?php

namespace HT\Cors\Providers;

use Illuminate\Routing\Router;
use HT\Cors\Middleware\CorsMiddleware;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service Provider
 *
 * @package HT\Cors\Providers
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register
     */
    public function register()
    {
        /** @var Router $router */
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('api', CorsMiddleware::class);
    }
}
