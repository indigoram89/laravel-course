<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $data = $request->only(['name', 'email']);
        // $data = $request->except(['name', 'email']);
        // dd($data);

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $agreement = $request->boolean('agreement');
        // $avatar = $request->file('avatar');

        // dd($name, $email, $password, $agreement);

        // dd($request->has('foo'));
        // dd($request->filled('name'));
        // dd($request->missing('name'));

        // if ($name = $request->input('name')) {
        //     $name = strtoupper($name);
        // }

        if (true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
}
