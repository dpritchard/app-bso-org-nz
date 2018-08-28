@extends('layouts.base')

@section('main')
<div class="row">
    <div class="col-12 col-md-3 col-xl-2">
        <nav class="sidebar collapse" id="sidebar" style="">
            @include('partials.admin_nav')
        </nav>
    </div>

    <main class="col">
        @yield('content')
    </main>
</div>
@endsection
