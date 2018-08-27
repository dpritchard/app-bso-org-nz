@if  (count($errors))
<div class="alert alert-danger">
    <p>The following validation error{{ $errors->count() > 1 ? 's' : '' }} occured:</p>
    <ul class="m-0">
        @foreach  ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
