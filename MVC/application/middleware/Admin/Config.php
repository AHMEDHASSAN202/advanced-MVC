<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

namespace Application\Middleware\Admin;
use Application\Middleware\MiddlewareInterface;
use System\App;

class Config implements MiddlewareInterface
{
    /**
     * Handle The Middleware
     *
     * @param App $app
     * @param \Application\Middleware\flag $next
     * @return mixed|void
     */
    public function handler(App $app, $next)
    {
        return 'ok';
    }
}