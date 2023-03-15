@extends('layouts.page')

@section('title', 'Index Page')

@section('content')
    @if (Auth::user())
        @if (Auth::user()->role == 'candidate')
        <section class="carrier">
            <img src="" alt="Logo Carrier">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facere rem reprehenderit? Nisi necessitatibus dolorum repudiandae dolores consectetur molestias sit ipsam consequuntur eligendi, alias libero accusamus. Doloribus mollitia non tempore?</p>
            <a href="">JOIN US!</a>
        </section>
        @endif
    @endif
@endsection