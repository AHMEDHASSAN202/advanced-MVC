<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

namespace Application\Middleware\Admin;
use Application\Middleware\MiddlewareInterface;
use System\App;

class Auth implements MiddlewareInterface
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
        return $next;
    }
}