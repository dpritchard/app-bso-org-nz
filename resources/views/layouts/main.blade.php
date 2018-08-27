@extends('layouts.base')

@section('main')
    <div class="row">
        <nav class="nav flex-column col-md-3">
            @include('partials.main_nav')
        </nav>

        <main class="col">
            @yield('content')
        </main>

        {{-- <div class="col-md-2">
            EVENTS HERE
        </div> --}}
    </div>
@endsection
