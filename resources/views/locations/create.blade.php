@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Location
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
        <form method="post" action="{{ route('locations.store') }}">
            <div class="form-group">
                @csrf
            <div class="form-group">
                <label for="property_id">Property Code:</label>
            <input type="text" class="form-control" name="property_id" value="{{ $id }}" readonly/>
            </div>
            <div class="form-group">
                <label for="location_postal_code">Postal Code:</label>
                <input type="text" class="form-control" name="location_postal_code"/>
            </div>
            <div class="form-group">
                <label for="location_city">City:</label>
                <input type="text" class="form-control" name="location_city"/>
            </div>
            <div class="form-group">
                <label for="location_address">Address:</label>
                <input type="text" class="form-control" name="location_address"/>
            </div>
            <div class="form-group">
                <label for="geox">Geox:</label>
                <input type="text" class="form-control" name="geox"/>
            </div>
            <div class="form-group">
                <label for="geoy">Geoy:</label>
                <input type="text" class="form-control" name="geoy"/>
            </div>

            <button type="submit" class="btn btn-primary">Submit and Continue >></button>
        </form>
    </div>
</div>
@endsection