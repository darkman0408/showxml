@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose video to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($videos as $video)
                <li class="list-group-item"><a href="{{route('videos.edit', $video->id)}}">{{ $video->video }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection