@extends('layouts.admin')

@section('extra_js')
<script type="text/javascript">
    const st = flatpickr("#start", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        onOpen: function(selectedDates, dateStr, instance) {
             instance.set('maxDate', fi.selectedDates[0])
        },
        onChange: function(selectedDates, dateStr, instance) {
             fi.set('minDate', dateStr)
        },
    });
    const fi = flatpickr("#finish", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        onOpen: function(selectedDates, dateStr, instance) {
             instance.set('minDate', st.selectedDates[0])
        },
        onChange: function(selectedDates, dateStr, instance) {
             st.set('maxDate', dateStr)
        },
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
        <fieldset class="col-md-8">
            <label for="title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $event->title }}">
            <small class="text-muted">A short, descriptive title.</small>
        </fieldset>

        <fieldset class="col-md-4">
            <label for="category" class="form-label">Category</label>
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
            <label for="start" class="form-label">Start Date and Time</label>
            <div class="input-group date">
                <input id="start" type="datetime-local" class="form-control" name="start" value="{{ old('start') ?? $event->start}}"/>
            </div>
            <small class="text-muted">Start date and time are required.</small>
        </div>
        <div class="col">
            <label for="finish" class="form-label">Finish Date and Time</label>
            <div class="input-group date">
                <input id="finish" type="datetime-local" class="form-control" name="finish" value="{{ old('finish') ?? $event->finish }}"/>
            </div>
            <small class="text-muted">Finish date and time are optional.</small>
        </div>
    </div>

    {{-- Need to prevent defualt on enter here --}}
    {{-- Later: Prevent clearing on changing of value? --}}
    <v-autocomplete-contacts :source='{{ $contacts->toJson() }}' :model='{!! json_encode($event->contact, JSON_FORCE_OBJECT) !!}' :old='{!! json_encode(old(), JSON_FORCE_OBJECT) !!}'>
    </v-autocomplete-contacts>

    <fieldset class="form-group">
        <label for="editor" class="form-label">Event Description</label>
        <v-md-editor :input='{{ json_encode(old('body') ?? $event->body) }}'></v-md-editor>
    </fieldset>

    @if  ($update)
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
    @else
    <button type="submit" class="btn btn-primary btn-block">Save</button>
    @endif
    
</form>
@endsection
