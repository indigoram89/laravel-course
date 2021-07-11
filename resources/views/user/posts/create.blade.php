@extends('layouts.main')

@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{ __('Создать пост') }}

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.posts.store') }}" />
@endsection
