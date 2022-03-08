<?php

declare(strict_types=1);

class Router
{
    protected array $routes;

    public function __construct()
    {
        $this->routes = [
            'get'    => [],
            'post'   => [],
        ];
    }

    public function get(string $path, callable $action)
    {
        $this->routes['get'][] = [$path, $action];
    }

    public function post(string $path, callable $action)
    {
        $this->routes['post'][] = [$path, $action];
    }

    public function routes(): array
    {
        return $this->routes;
    }
}