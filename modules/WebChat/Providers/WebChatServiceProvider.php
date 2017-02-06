<?php

namespace WebChat\Providers;

use Nova\Support\ServiceProvider;


class WebChatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
        $basePath = realpath(__DIR__ .'/../');

        // Configure the Package.
        $this->package('WebChat', 'web_chat', $basePath);

        //
        require $basePath .DS .'Bootstrap.php';
    }

    /**
     * Register the Dashboard module Service Provider.
     *
     * This service provider is a convenient place to register your modules
     * services in the IoC container. If you wish, you may make additional
     * methods or service providers to keep the code more focused and granular.
     *
     * @return void
     */
    public function register()
    {
        // Register additional Service Providers.
        $this->app->register('WebChat\Providers\AuthServiceProvider');
        $this->app->register('WebChat\Providers\EventServiceProvider');
        $this->app->register('WebChat\Providers\RouteServiceProvider');
    }

}