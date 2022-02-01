@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@if ($show_locations)
<p>Talks are held at the Otago Pioneer Women’s Memorial Assn., Inc., Building, 362 Moray Place, Dunedin Central. Please be prompt as we have to hold the door open.</p>
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
