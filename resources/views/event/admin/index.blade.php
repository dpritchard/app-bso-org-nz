@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between">
    <div><h1>All Events</h1>
    </div>
    <div><a class="btn btn-success" href="/admin/event/create">Create New</a></div>
</div>
<div><p>Click the Edit button to edit and click the URL link to view.</p></div>

@foreach  ($events as $event)
<div class="d-flex mb-1 align-items-center">
    <div class="me-2"><a class="btn btn-warning btn-sm" href="/admin/event/{{ $event->hashid }}/edit">Edit</a></div>
    <div class=""><a href="{{ $event->path() }}">{{ $event->start->toFormattedDateString() }} | {!! $event->title_html !!}</a></div>
</div>
@endforeach

@endsection
