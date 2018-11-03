@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@if ($show_locations)
<p>Talks are held at the Zoology Benham Building, 346 Great King Street, behind the Zoology car park by the Captain Cook Hotel. Use the main entrance of the Benham Building to get in and go to the Benham Seminar Room, Rm. 215, 2nd floor. Please be prompt as we have to hold the door open.</p>
<p>Trips leave from the Department of Botany car park.</p>
@endif

@foreach  ($events as $event)
<div>
    <h2><a href="{{ $event->path() }}">{!! $event->title_html !!}</a></h2>
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

@if ($events instanceof \Illuminate\Pagination\AbstractPaginator)
    {{ $events->links() }}
@endif

@endsection
