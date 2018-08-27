@extends('layouts.base')

@section('main')
    <div class="row">
        <nav class="nav flex-column col-md-3">
            @include('partials.admin_nav')
        </nav>

        <main class="col">
            @yield('content')
        </main>
    </div>
@endsection
