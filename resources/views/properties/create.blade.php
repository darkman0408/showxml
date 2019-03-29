@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Property
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
        <form method="post" action="{{ route('properties.store') }}">
            <div class="form-group">
                @csrf
                <label for="date_listed">Date Listed:</label>
                <input type="date" class="form-control" name="date_listed"/>
            </div>
            <div class="form-group">
                <label for="property_type">Property Type:</label>
                <input type="text" class="form-control" name="property_type"/>
            </div>
            <div class="form-group">
                <label for="listing_type">Listing Type:</label>
                <input type="text" class="form-control" name="listing_type"/>
            </div>
            <div class="form-group">
                <label for="property_size">Property Size:</label>
                <input type="text" class="form-control" name="property_size"/>
            </div>
            <div class="form-group">
                <label for="land_size">Land Size:</label>
                <input type="text" class="form-control" name="land_size"/>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price"/>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title"/>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description"/>
            </div>
            <div class="form-group">
                <label for=""title_en>Title English:</label>
                <input type="text" class="form-control" name="title_en"/>
            </div>
            <div class="form-group">
                <label for="description_en">Description English:</label>
                <input type="text" class="form-control" name="description_en"/>
            </div>
            <div class="form-group">
                <label for="title_de">Title German:</label>
                <input type="text" class="form-control" name="title_de"/>
            </div>
            <div class="form-group">
                <label for="description_de">Description German:</label>
                <input type="text" class="form-control" name="description_de"/>
            </div>
            <div class="form-group">
                <label for="link">Link:</label>
                <input type="text" class="form-control" name="link"/>
            </div>
            <div class="form-group">
                <label for="energy_efficiency">Energy Efficiency:</label>
                <input type="text" class="form-control" name="energy_efficiency"/>
            </div>

            
            <button type="submit" class="btn btn-primary">Submit and Continue >></button>
        </form>
    </div>
</div>
@endsection