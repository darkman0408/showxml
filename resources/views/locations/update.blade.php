@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose location to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($locations as $location)
                <li class="list-group-item"><a href="{{route('locations.edit', $location->id)}}">{{ $location->location_address }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection