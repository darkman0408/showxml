@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose tag to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($tags as $tag)
                <li class="list-group-item"><a href="{{route('tags.edit', $tag->id)}}">{{ $tag->tag }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection