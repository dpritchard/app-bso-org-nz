@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between">
        <div><h1>All Pages</h1></div>
        <div><a class="btn btn-success" href="/admin/page/create">Create New</a></div>
    </div>
    <div><p>Click the Edit button to edit and click the URL link to view.</p></div>
    @foreach ($pages as $page)
        <div class="d-flex mb-1 align-items-center">
            <div class="me-2"><a class="btn btn-warning btn-sm" href="/admin/page/{{ $page->hashid }}/edit">Edit</a></div>
            <div class=""><a href="{{ $page->path() }}">{{ url($page->path()) }}</a></div>
        </div>
    @endforeach
@endsection
