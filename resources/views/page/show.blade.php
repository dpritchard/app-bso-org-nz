@extends('layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <div><h1>{{ $page->title }}</h1></div>
        @can('administer', $page)
        <div class="ml-3 mb-2"><a class="badge badge-warning" href="/admin/page/{{ $page->hashid }}/edit">Edit</a></div>
        @endcan
    </div>

    {!! $page->body_html !!}
@endsection
