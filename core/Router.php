<?php
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

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

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->__callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route found for this URI.');
    }

    private function __callAction($controller, $action)
    {
        $controller = new $controller;
        if (! method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to {$action} action");
        }

        return (new $controller)->$action();
    }
}
