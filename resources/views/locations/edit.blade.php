@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
    <div class="card-header">
        Edit Location
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
      <form method="post" action="{{ route('locations.update', $location->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
          
                <div class="form-group">
                    <label for="location_postal_code">Postal Code:</label>
                    <input type="text" class="form-control" name="location_postal_code" value={{ $location->location_postal_code }} />
                </div>
                <div class="form-group">
                    <label for="location_city">City:</label>
                    <input type="text" class="form-control" name="location_city" value={{ $location->location_city }} />
                </div>
                <div class="form-group">
                    <label for="location_address">Address:</label>
                    <input type="text" class="form-control" name="location_address" value={{ $location->location_address }} />
                </div>
                <div class="form-group">
                    <label for="geox">Geox:</label>
                    <input type="text" class="form-control" name="geox" value={{ $location->geox }} />
                </div>
                <div class="form-group">
                    <label for="geoy">Geoy:</label>
                    <input type="text" class="form-control" name="geoy" value={{ $location->geoy }} />
                </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</div>
@endsection
