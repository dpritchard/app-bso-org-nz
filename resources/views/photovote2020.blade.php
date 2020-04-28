@extends('layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <v-photo-vote 
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Plants and People', description: ''}
    ]" 
    v-bind:images="[
    	
    ]"></v-photo-vote>
</div>
@endsection
