@extends('layouts.admin') 

@section('content')
<div class="d-flex justify-content-between">
    <div><h1>All Files</h1>
    </div>
    <div><a class="btn btn-success" href="/admin/file/create">Create New</a></div>
</div>
<ul>
    @foreach  ($files as $file)
    <li>{{ $file->name }}: <a href="{{ $file->path() }}">View / Download</a></li>
    <ul>
        <li>Stored locally as <code>{{ $file->storage_path }}</code></li>
    </ul>
    @endforeach
</ul>
@endsection
