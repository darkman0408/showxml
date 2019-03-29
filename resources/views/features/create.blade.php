@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Feature
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('features.store') }}">
                @csrf
                <div class="form-group">
                    <label for="property_id">Property Code:</label>
                <input type="text" class="form-control" name="property_id" value="{{ $id }}" readonly/>
                </div>
                <div class="form-group">
                    <label for="bedrooms">Bedrooms:</label>
                    <input type="text" class="form-control" name="bedrooms"/>
                </div>
                <div class="form-group">
                    <label for="bathrooms">Bathrooms:</label>
                    <input type="text" class="form-control" name="bathrooms"/>
                </div>
                <div class="form-group">
                    <label for="rooms">Rooms:</label>
                    <input type="text" class="form-control" name="rooms"/>
                </div>
                <div class="form-group">
                    <label for="condition">Condition:</label>
                    <input type="text" class="form-control" name="condition"/>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" name="age"/>
                </div>
                <div class="form-group">
                    <label for="floor">Floor:</label>
                    <input type="text" class="form-control" name="floor"/>
                </div>

            <button type="submit" class="btn btn-primary">Submit and Continue >></button>
        </form>
    </div>
</div>
@endsection