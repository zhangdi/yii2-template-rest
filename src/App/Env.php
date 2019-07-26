<?php


namespace App;


class Env
{
    /**
     * @param string $name
     * @param null|mixed $defaultValue
     * @return array|false|string|null
     */
    public static function get(string $name, $defaultValue = null)
    {
        $value = \getenv($name);
        if ($value === false) {
            return $defaultValue;
        }
        return $value;
    }
}
