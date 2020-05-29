<?php

namespace Sunnysideup\SanitiseClassName;

class Sanitiser
{
    /**
     * you can fill this variable like this:
     * ```php
     *     Sunnysideup\Ecommerce\Product => 'Product'
     * ```
     * @var array
     */
    private static $scramble_registry = [];

    public static function sanitise(string $className): string
    {
        return str_replace('\\', '-', $className);
    }

    public static function unsanitise(string $className): string
    {
        return str_replace('-', '\\', $className);
    }

    public static function scramble(string $className): string
    {
        $registry = self::get_registry();
        if (isset($registry[$className])) {
            return $registry[$className];
        }
        return $className;
    }

    public static function unscramble(string $className): string
    {
        $registry = self::get_registry();
        $registry = array_flip($registry);
        if ($registry[$className]) {
            return $registry[$className];
        }
        return $className;
    }

    protected static function get_registry(): array
    {
        return Config::inst()->get(self::class, 'scramble_registry');
    }
}
