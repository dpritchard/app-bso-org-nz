@extends('layouts.admin')

@section('extra_js')

@endsection

@section('content')
    
@include('partials.form_errors')

<form method="POST" action="/admin/file" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if  ($update)
    @method('PATCH')
    @endif
    <fieldset class="form-group">
        <label for="file" class="form-label">File</label>
        <input type="file" name="file">

        </fieldset>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visibility" id="public" value="public" checked>
        <label class="form-check-label" for="public">Public</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visibility" id="private" value="private">
        <label class="form-check-label" for="private">Private</label>
    </div>
    <div>
        @if  ($update)
        <button type="submit" class="btn btn-primary">Save Changes</button>
        @else
        <button type="submit" class="btn btn-primary">Save</button>
        @endif
    </div>
</form>
@endsection
