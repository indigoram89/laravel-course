<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->latest('created_at')
            ->paginate(12);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $validated = validate($request->all(), Post::$rules);

        $post = (new Post)->fillAttributes($validated);
        $post->user_id = User::query()->value('id');
        $post->save();

        alert(__('Сохранено!'));

        return redirect()->route('user.posts.show', $post);
    }

    public function show(Post $post)
    {
        return view('user.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = validate($request->all(), Post::$rules);

        $post->fillAttributes($validated)->save();

        alert(__('Сохранено!'));

        return back();
    }

    public function delete($post)
    {
        return redirect()->route('user.posts');
    }
}
