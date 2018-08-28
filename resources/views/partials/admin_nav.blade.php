<a class="nav-link" href="/">BSO Home</a>

@if  (auth()->user()->authoriseRoles(['webmaster']))
<a class="nav-link" href="/admin/page">Administer Pages</a>
@endif

@if  (auth()->user()->authoriseRoles(['webmaster']))
<a class="nav-link" href="/admin/event">Administer Events</a>
@endif

@if  (auth()->user()->authoriseRoles())
<a class="nav-link" href="/admin/file">Administer Files</a>
@endif

@if  (auth()->user()->authoriseRoles(['treasurer']))
<a class="nav-link" href="/admin/subscription">Administer Subscriptions</a>
@endif

<a class="nav-link" href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
   {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
