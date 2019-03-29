@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose feature to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($features as $feature)
                <li class="list-group-item"><a href="{{route('features.edit', $feature->id)}}">{{ $feature->bedrooms }} | {{$feature->bathrooms}} | {{$feature->rooms}} | {{$feature->condition}} | {{$feature->age}} | {{$feature->floor}}"</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection