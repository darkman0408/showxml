@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <p>Choose contact to update</p>
    </div>

    <div class="row">

        <ul class="list-group">
            @foreach ($contacts as $contact)
                <li class="list-group-item"><a href="{{route('contacts.edit', $contact->id)}}">{{ $contact->contact_name }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection