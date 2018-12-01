<?php

class Router
{
    protected $routes = [];

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

    public function direct($url)
    {
        if (isset ($this->routes[$url])) {
            return $this->routes[$url];
        }
        throw new Exception('Page not found');
    }
};