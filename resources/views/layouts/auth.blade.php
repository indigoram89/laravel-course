@extends('layouts.base')

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    @yield('auth.content')
                </div>
            </div>
        </x-container>
    </section>
@endsection
