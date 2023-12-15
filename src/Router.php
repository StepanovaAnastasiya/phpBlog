<?php
namespace Blog;

class Router {

    /**
     * @var array
     */
    private $routes = [];

    /**
     * @var array
     */
    private $config;

    /**
     * @var string
     */
    private $url;

    /**
     * @param       $resource
     * @param array $config
     */
    public function __construct(string $url, array $config)
    {
        $this->url        = $url;
        $this->config     = $config;
    }

    public function addRoute(string $pattern, $callback) {
        $this->routes[$pattern] = $callback;
    }

    public function route() {
        foreach ($this->routes as $pattern => $callback) {
            if (preg_match($pattern, $this->url, $matches)) {
                array_shift($matches);
                call_user_func_array($callback, $matches);
                return;
            }
        }

        echo "404 Not Found";
    }
}
