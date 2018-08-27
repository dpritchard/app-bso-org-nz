@extends('layouts.admin')

@section('extra_js')
<script>
    // Consider moving to vue.js, if this works out (currently beta):
    // https://github.com/ankurk91/vue-bootstrap-datetimepicker/tree/tempusdominus-bs-4
    // Need to fire an event on mount to sync up pickers with pre-populated data
    let icons = {
        time: 'far fa-clock',
        date: 'far fa-calendar-alt',
        up: 'fas fa-arrow-up',
        down: 'fas fa-arrow-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-calendar-check',
        clear: 'far fa-trash-alt',
        close: 'far fa-times-circle'
    };

    $(function() {
        $('#start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            icons: icons
        });
        $('#finish').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            icons: icons,
            useCurrent: false
        });
        $("#start").on("change.datetimepicker", function(e) {
            $('#finish').datetimepicker('minDate', e.date);
        });
        $("#finish").on("change.datetimepicker", function(e) {
            $('#start').datetimepicker('maxDate', e.date);
        });
    });
</script>
@endsection

@section('content')
@include('partials.form_errors')

<form method="POST" action="{{ $update ? "/admin/event/$event->hashid" : '/admin/event'}}">
    {{ csrf_field() }}
    @if  ($update)
    @method('PATCH')
    @endif

    <div class="row">
        <fieldset class="form-group col-md-8">
            <label for="title">Event Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $event->title }}">
            <small class="text-muted">A short, descriptive title.</small>
        </fieldset>

        <fieldset class="form-group col-md-4">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                    <option value="">Select a Category...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category') ?? $event->category->id) == $category->id ? 'selected' : '' }}>{{ $category->type }}</option>
                    @endforeach
                </select>
            <small class="text-muted">Required.</small>
        </fieldset>
    </div>

    <div class="form-group row">
        <div class="col">
            <label for="start">Start Date and Time</label>
            <div class="input-group date" id="start" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="start" data-target="#start" value="{{ old('start') ?? $event->start}}"/>
                <div class="input-group-append" data-target="#start" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
            </div>
            <small class="text-muted">Start date and time are required.</small>
        </div>
        <div class="col">
            <label for="finish">Finish Date and Time</label>
            <div class="input-group date" id="finish" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="finish" data-target="#finish" value="{{ old('finish') ?? $event->finish }}"/>
                <div class="input-group-append" data-target="#finish" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
            </div>
            <small class="text-muted">Finish date and time are optional.</small>
        </div>
    </div>

    {{-- Need to prevent defualt on enter here --}}
    {{-- Later: Prevent clearing on changing of value? --}}
    <v-autocomplete-contacts :source='{{ $contacts->toJson() }}' :model='{!! json_encode($event->contact, JSON_FORCE_OBJECT) !!}' :old='{!! json_encode(old(), JSON_FORCE_OBJECT) !!}'>
    </v-autocomplete-contacts>

    <fieldset class="form-group">
        <label for="editor">Event Description</label>
        <v-md-editor :input='{{ json_encode(old('body') ?? $event->body) }}'></v-md-editor>
    </fieldset>

    @if  ($update)
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
    @else
    <button type="submit" class="btn btn-primary btn-block">Save</button>
    @endif
    
</form>
@endsection
