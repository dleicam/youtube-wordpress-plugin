<?php

/**
 * @package Surge
 **/

namespace Inc;

use Inc\base\Thanks;

final class Init
{
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    public static function get_services()
    {
        return [
            Thanks::class,
        ];
    }

    private static function instantiate($class)
    {
        return new $class();
    }
}