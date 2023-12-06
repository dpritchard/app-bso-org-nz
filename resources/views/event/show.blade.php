@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <div><h1>{!! $event->title_html !!}</h1></div>
    @can('administer',  $event)
    <div><a class="btn btn-warning btn-sm" href="/admin/event/{{ $event->hashid }}/edit">Edit</a></div>
    @endcan
</div>
<div class="d-flex align-items-center mb-2">
    <div class="icon-box text-center">
        @switch($event->category->type)
            @case("Field Trip")
                <i class="fas fa-tree fa-2x"></i>
            @break

            @case("Talk / Seminar")
                <i class="fas fa-chalkboard-teacher fa-2x"></i>
            @break

            @default
                <i class="fas fa-info-circle fa-2x"></i>
        @endswitch
    </div>
    <div class="">
        <p class="mb-0">{{ $event->category->type }} on {{ $event->start->format('l jS \\of F Y\\, h:i A') }} <small>({{ $event->start->diffForHumans() }})</small></p>
        <p class="mb-0">Contact: {{ $event->contact->name }}
            @if  ($event->contact->email)
            | <i class="fas fa-envelope"></i> {{ $event->contact->email }}
            @endif
            @if  ($event->contact->phone)
            | <i class="fas fa-phone"></i> {{ $event->contact->phone }}
            @endif
        </p>
    </div>
</div>
<div>
    {!! $event->body_html !!}
</div>
    @endsection
