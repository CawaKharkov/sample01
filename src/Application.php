<?php

namespace Cawakharkov\Sample01;

/**
 * Main application class
 * Class Application
 */
class Application
{

    /**
     * Boot the application
     */
    public function boot()
    {
        // include config, load DI, etc
    }

    /**
     * Run application
     */
    public function run()
    {
        // parse request, view response
        $this->dispatch();

    }

    protected function dispatch()
    {
        $dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
            $base_url = '/';
            $r->addRoute('GET', $base_url.'/users', 'get_all_users_handler');
            // {id} must be a number (\d+)
            $r->addRoute('GET', $base_url.'/user/{id:\d+}', 'get_user_handler');
            // The /{title} suffix is optional
            $r->addRoute('GET', $base_url.'/articles/{id:\d+}[/{title}]', 'get_article_handler');
        });
    }
}