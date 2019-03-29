@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col">
            <a href="{{route('properties.create')}}">
                <div class="card">
                    <div class="card-body">
                        ADD PROPERTY
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{route('properties.choose')}}">
                <div class="card">
                    <div class="card-body">
                        EDIT PROPERTY
                    </div>
                </div>
            </a>
        </div>
        
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('locations.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD LOCATION
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('locations.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT LOCATION
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('contacts.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD CONTACT
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('contacts.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT CONTACT
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('features.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD FEATURE
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('features.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT FEATURE
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('images.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD IMAGE
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('images.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT IMAGE
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('videos.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD VIDEO
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('videos.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT VIDEO
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">

            <div class="col">
                <a href="{{route('tags.choose')}}">
                    <div class="card">
                        <div class="card-body">
                            ADD TAG
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col">
                <a href="{{route('tags.updater')}}">
                    <div class="card">
                        <div class="card-body">
                            EDIT TAG
                        </div>
                    </div>
                </a>
            </div>
    
    </div>

    <div class="row">
        <div class="col">
            <a href="{{route('properties.index')}}">
                <div class="card">
                    <div class="card-body">
                        VIEW XML
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

@endsection