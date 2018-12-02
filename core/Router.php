<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new self();

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    public function direct($url, $method)
    {
        $url = parse_url($url, PHP_URL_PATH);
        if (isset ($this->routes[$method][$url])) {
            return $this->routes[$method][$url];
        }
        throw new Exception('Page not found');
    }
}

