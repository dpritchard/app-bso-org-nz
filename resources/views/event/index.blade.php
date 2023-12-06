@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@if ($show_locations)
<p>Talks are held at Manaaki Whenua Landcare Research in the Main Seminar room, 764 Cumberland Street, Dunedin. Please be prompt as we have to hold the door open. Zoom links for the talks are sent to members, <a href="https://bso.org.nz/about-joining-the-bso">join the BSO here</a>.</p>
<p>Trips leave from the Department of Botany car park.</p>
@endif

@foreach  ($events as $event)
<div class="d-flex flex-column">
    <div>
        <h2><a href="{{ $event->path() }}">{!! $event->title_html !!}</a></h2>
    </div>
    <div class="d-flex align-items-center mb-2">
        <div class="py-1 ps-2 pe-4">
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
        <div class="flex-grow-1">
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
</div>
@endforeach

@if ($events instanceof \Illuminate\Pagination\AbstractPaginator)
    {{ $events->links() }}
@endif

@endsection
