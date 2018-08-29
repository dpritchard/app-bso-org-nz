@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between">
    <div><h1>All Events</h1>
    </div>
    <div><a class="btn btn-success" href="/admin/event/create">Create New</a></div>
</div>

@foreach  ($events as $event)
<div class="row mb-1">
    <div class="col"><a href="{{ $event->path() }}">{{ $event->start->toFormattedDateString() }} | {!! $event->title_html !!}</a></div>
    <div class="col-2 text-right">
        <a class="btn btn-primary btn-sm" href="{{ $event->path() }}">View</a>
        <a class="btn btn-warning btn-sm" href="/admin/event/{{ $event->hashid }}/edit">Edit</a>
    </div>
</div>
@endforeach

@endsection
