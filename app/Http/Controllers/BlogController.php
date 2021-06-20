<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Soluta, qui?',
        ];

        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur, adipisicing elit. Soluta, qui?',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Поставить лайк';
    }
}
