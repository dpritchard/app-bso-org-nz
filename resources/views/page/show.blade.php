@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <div><h1>{!! $page->title_html !!}</h1></div>
    @can('administer',  $page)
    <div><a class="btn btn-warning btn-sm" href="/admin/page/{{ $page->hashid }}/edit">Edit</a></div>
    @endcan
</div>

{!! $page->body_html !!}
@endsection
