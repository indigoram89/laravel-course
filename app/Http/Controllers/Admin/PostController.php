<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница список постов';
    }

    public function create()
    {
        return 'Страница создание поста';
    }

    public function store()
    {
        return 'Запрос создание поста';
    }

    public function show($post)
    {
        return "Страница просмотр поста {$post}";
    }

    public function edit($post)
    {
        return "Страница изменение поста {$post}";
    }

    public function update()
    {
        return 'Запрос изменение поста';
    }

    public function delete()
    {
        return 'Запрос удаление поста';
    }

    public function like()
    {
        return 'Лайк + 1';
    }
}
