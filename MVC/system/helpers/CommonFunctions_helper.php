<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

if (!function_exists('pre')) {
    /**
     * Show Arrays || Objects
     *
     * @param $var
     */
    function pre($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

if (!function_exists('pred')) {
    /**
     * Show Arrays || Objects and Exec Script
     *
     * @param $var
     */
    function pred($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        die;
    }
}

if(!function_exists('app')) {
    /**
     * Get Instance From Application Class
     *
     * @return object
     */
    function app() {
        return \System\App::getInstance();
    }
}

if (!function_exists('array_get')) {
    /**
     * Get Value From array
     *
     * @param $array
     * @param $key
     * @param $return
     * @return bool
     */
    function array_get( array $array,$key , $return = null) {
        return $array[$key] ?? $return;
    }
}

if (!function_exists('setLink')) {
    /**
     * Set Link
     *
     * @param $link
     * @return string
     */
    function setLink($link) {
        return baseUrl() . '/' . $link;
    }
}

if (!function_exists('baseUrl')) {
    /**
     * Get Base Url
     *
     * @return mixed
     */
    function baseUrl() {
        return app()->request->baseUrl();
    }
}

if (!function_exists('redirect')) {
    /**
     * Redirect URL
     *
     * @param $url
     */
    function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}

if (!function_exists('adminAssets')) {
    /**
     * Admin Assets
     *
     * @param $url
     * @return string
     */
    function adminAssets($url)
    {
        return setLink('admin/'.$url);
    }
}

if (!function_exists('themeAssets')) {
    /**
     * Theme Assets
     *
     * @param $url
     * @return string
     */
    function themeAssets($url)
    {
        return setLink('theme/'.$url);
    }
}

if (!function_exists('pluginsAssets')) {
    /**
     * Theme Assets
     *
     * @param $url
     * @return string
     */
    function pluginsAssets($url)
    {
        return setLink('plugins/'.$url);
    }
}