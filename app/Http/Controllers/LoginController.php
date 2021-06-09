<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return 'Страница входа';
    }

    public function store()
    {
        return 'Запрос на вход';
    }
}
