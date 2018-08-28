@extends('layouts.main')

@section('content')

<div class="d-flex align-items-center">
    <div>
        <h1>{!! $event->title_html !!}</h1>
    </div>
    @can('administer',  $event)
    <div class="ml-3 mb-2"><a class="badge badge-warning" href="/admin/event/{{ $event->hashid }}/edit">Edit</a></div>
    @endcan
</div>

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
@endsection
