<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('test')) {
    function test()
    {
        return app('test');
    }
}

if (! function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}
