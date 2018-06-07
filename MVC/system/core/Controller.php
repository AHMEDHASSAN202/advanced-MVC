<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

namespace System;


abstract class Controller
{

    /**
     * Instance of Application Class
     *
     * @var App
     */
    protected $app;

    /**
     * Controller constructor.
     *
     * @param $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * Get Property from Application class
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->app->$property;
    }
}