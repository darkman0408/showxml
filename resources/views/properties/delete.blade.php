@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose property to delete</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($properties as $property)
                <li class="list-group-item"><a href="{{route('properties.destroy', $property->id)}}">{{ $property->title }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection