@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose image to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($images as $image)
                <li class="list-group-item"><a href="{{route('images.edit', $image->id)}}">{{ $image->image }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection