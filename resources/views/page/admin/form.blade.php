@extends('layouts.admin')

@section('content')
    @include('partials.form_errors')

    <form method="POST" action="{{ $update ? "/admin/page/$page->hashid" : '/admin/page'}}">
        {{ csrf_field() }}
        @if ($update)
            @method('PATCH')
        @endif

        <fieldset class="form-group">
            <label for="uri">Page URI</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">{{ url('/') . '/' }}</div>
                </div>
            <input type="text" class="form-control" id="uri" name="uri" value="{{ old('uri') ?? $page->uri }}">
            </div>
            <small class="text-muted">The URI that will form the page URL.</small>
        </fieldset>

        <fieldset class="form-group">
            <label for="title">Page Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $page->title }}">
            <small class="text-muted">This will appear at the top of the page as a first-level header.</small>
        </fieldset>

        <fieldset class="form-group">
            <label for="editor">Page Body</label>
            <v-md-editor :input='{{ json_encode(old('body') ?? $page->body) }}'></v-md-editor>
        </fieldset>

        @if ($update)
            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
        @else
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        @endif
    </form>
@endsection
