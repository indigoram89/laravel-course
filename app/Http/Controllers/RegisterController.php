<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return 'Страница регистрации';
    }

    public function store()
    {
        return 'Запрос на регистрацию';
    }
}
