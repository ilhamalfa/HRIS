@extends('layouts.page')

@section('title', 'Dashboard')

@section('content')
    {{-- @if (Auth::user()->role != 'candidate') --}}
        @if (Auth::user()->role == 'employee')
        <section class="about-karyaone">
            <img src="{{ asset('logo/manager.png') }}" alt="About Karyaone Logo"></img>
            <p>Employee Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo harum qui similique, aut pariatur nisi voluptatem! Quibusdam, quas? Ducimus officiis obcaecati est esse at suscipit, perspiciatis quis! Accusamus, reprehenderit?</p>
            <a href="">GUIDE</a>
        </section>
        @endif
        @if (Auth::user()->role == 'admin')
        <section class="about-karyaone">
            <img src="{{ asset('logo/manager.png') }}" alt="About Karyaone Logo"></img>
            <p>Admin Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo harum qui similique, aut pariatur nisi voluptatem! Quibusdam, quas? Ducimus officiis obcaecati est esse at suscipit, perspiciatis quis! Accusamus, reprehenderit?</p>
            <a href="">GUIDE</a>
        </section>
        @endif
        @if (Auth::user()->role == 'superadmin')
        <section class="about-karyaone">
            <img src="{{ asset('logo/manager.png') }}" alt="About Karyaone Logo"></img>
            <p>Super Admin Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo harum qui similique, aut pariatur nisi voluptatem! Quibusdam, quas? Ducimus officiis obcaecati est esse at suscipit, perspiciatis quis! Accusamus, reprehenderit?</p>
            <a href="">GUIDE</a>
        </section>
        @endif
    {{-- @endif --}}
@endsection