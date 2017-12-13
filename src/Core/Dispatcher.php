<?php
/**

 * 
 * @date: 2017/6/26 14:41
 * @version 2.0.3
 */

namespace Kerisy\Core;


use Psr\Http\Message\ServerRequestInterface;

/**
 * Class Dispatcher
 *
 * @package Kerisy\Core
 */
class Dispatcher extends Component
{
    /**
     * @var Router
     */
    protected $router;

    public function init()
    {
        $this->router = Router::getInstance();
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function dispatch(ServerRequestInterface $request)
    {
        $route = $this->router->routing($request);
        return $route;
    }
}
