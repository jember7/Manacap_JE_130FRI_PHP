<?php

if (!function_exists('dd')) {
    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }
}

if (!function_exists('urlIs')) {
    function urlIs($value) {
        return $_SERVER['REQUEST_URI'] === $value;
    }
}
