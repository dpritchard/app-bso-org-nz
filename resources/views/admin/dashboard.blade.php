@extends('layouts.admin')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>This is a basic landing page for administrators. Regular users should not be able to access this page. Depending on your access, you may be able to administer pages, events, files or subscriptions.</p>

    <p>You have {{ natural_language_join(auth()->user()->roles->pluck('name')->toArray()) }} privileges.</p>
@endsection
