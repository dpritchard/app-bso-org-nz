@extends('layouts.base')

@section('main')
<div class="row">
    <div class="col-12 col-md-3 col-xl-2">
        <nav class="nav flex-md-column sidebar collapse" id="sidebar" style="">
            @include('partials.main_nav')
        </nav>
    </div>

    <main class="col">
        @yield('content')
    </main>

    {{-- <div class="col-md-2">
        EVENTS HERE
    </div> --}}
</div>
@endsection
