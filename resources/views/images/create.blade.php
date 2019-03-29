@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Image
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
        <form method="post" action="{{ route('images.store') }}">
                @csrf
                
                <div class="form-group">
                    <label for="property_id">Property Code:</label>
                <input type="text" class="form-control" name="property_id" value="{{ $id }}" readonly/>
                <div class="form-group">
                    <label for="image">Image Url:</label>
                    <input type="text" class="form-control" name="image"/>
                </div>

            <button type="submit" class="btn btn-primary">Submit and Continue >></button>
        </form>
    </div>
</div>
@endsection