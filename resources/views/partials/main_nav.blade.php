<a class="nav-link" href="/">Home</a>
<a class="nav-link" href="/diary">Diary</a>
<a class="nav-link" href="/past-events">Past Events</a>
<a class="nav-link" href="/trip-guidelines">Trip Guidelines</a>
<a class="nav-link" href="/bso-calendar">Calendar</a>
<a class="nav-link" href="/baylis">Baylis Lecture</a>
<a class="nav-link" href="/photo-competition">Photo Competition</a>
<a class="nav-link" href="/eagle-drawing-competiton">Drawing Competiton</a>
<a class="nav-link" href="/scholarships">Bannister Student Grant</a>
<a class="nav-link" href="/lichen-guide">Lichen Guide</a>
<a class="nav-link" href="/newsletter"><i>Newsletter</i></a>
<a class="nav-link" href="/species-lists">Species Lists</a>
<a class="nav-link" href="/eagle-supplement">Eagle Supplements</a>
<a class="nav-link" href="/about-joining-the-bso">Join the BSO</a>
<a class="nav-link" href="/committee">Committee</a>
<a class="nav-link" href="/links">Links</a>
<a class="nav-link" href="/downloads">Downloads</a>
<a class="nav-link" href="/disclamer">Disclaimer</a>

<a class="nav-link" href="https://www.facebook.com/pages/Botanical-Society-of-Otago/513831728707617">
<img alt="FindUsOnFacebook" class="facebook-logo" src="{{ asset('img/find_us_on_facebook.png') }}">
</a>

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
