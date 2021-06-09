<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:10');
    }

    public function __invoke()
    {
        return 'Test';
    }
}
