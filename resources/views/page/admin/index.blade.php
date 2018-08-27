@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between">
        <div><h1>All Pages</h1></div>
        <div><a class="btn btn-success" href="/admin/page/create">Create New</a></div>
    </div>
    @foreach ($pages as $page)
        <div class="d-flex justify-content-between mb-1">
            <div><a href="{{ $page->path() }}">{{ url($page->path()) }}</a></div>
            <div>
                <a class="btn btn-primary btn-sm" href="{{ $page->path() }}">View</a>
                <a class="btn btn-warning btn-sm" href="/admin/page/{{ $page->hashid }}/edit">Edit</a>
            </div>
        </div>
    @endforeach
@endsection
