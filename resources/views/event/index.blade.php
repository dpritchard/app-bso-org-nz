@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@foreach  ($events as $event)
<div>
    <h2><a href="{{ $event->path() }}">{{ $event->title }}</a></h2>
    <p class="mb-0">{{ $event->start->format('l jS \\of F Y\\, h:i A') }} <small>({{ $event->start->diffForHumans() }})</small></p>
    <p>Contact: {{ $event->contact->name }}
        @if  ($event->contact->email)
        | <i class="fas fa-envelope"></i> {{ $event->contact->email }}
        @endif
        @if  ($event->contact->phone)
        | <i class="fas fa-phone"></i> {{ $event->contact->phone }}
        @endif
    </p>
    {!! $event->body_html !!}
</div>
@endforeach

@endsection
