{{-- <a class="nav-link" href="/">BSO Home</a> --}}
<a class="nav-link" href="/diary">Diary</a>
<a class="nav-link" href="/past-events">Past Events</a>
<a class="nav-link" href="/trip-guidelines">Trip Guidelines</a>
<a class="nav-link" href="/bso-calendar">2018 Calendar sold out</a>
<a class="nav-link" href="/photo-competition">2018 Photo Competition</a>
<a class="nav-link" href="/eagle-drawing-competiton">Audrey Eagle Drawing Competiton</a>
<a class="nav-link" href="/lichen-guide">Lichen Guide</a>
<a class="nav-link" href="/pbfund">The Peter Bannister Student Field Grant</a>
<a class="nav-link" href="/newsletter"><i>Newsletter</i></a>
<a class="nav-link" href="/eagle-supplement">Eagle Supplements</a>
<a class="nav-link" href="/about-joining-the-bso">Join the BSO</a>
<a class="nav-link" href="/committee">Committee</a>
<a class="nav-link" href="/links">Links</a>
<a class="nav-link" href="/downloads">Downloads</a>
<a class="nav-link" href="/disclamer">Disclaimer</a>

@auth
<a class="nav-link" href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
   {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endauth
