@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@if ($show_locations)
<p>Talks are held in the Zoology Benham Building, 346 Great King Street, behind the Zoology car park by the old Captain Cook Hotel. This is where we used to meet pre-covid. Please use the main entrance of the Benham Building to enter and go to the Benham Seminar Room, Room 215, located on the second floor. Please be prompt as we have to hold the door open. Zoom links for the talks are sent to members, <a href="https://bso.org.nz/about-joining-the-bso">join the BSO here</a>.</p>
<p>Trips leave from the Department of Botany car park.</p>
@endif

@foreach  ($events as $event)
<div>
    <div>
        <h2><a href="{{ $event->path() }}">{!! $event->title_html !!}</a></h2>
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
</div>
@endforeach

@if ($events instanceof \Illuminate\Pagination\AbstractPaginator)
    {{ $events->links() }}
@endif

@endsection
