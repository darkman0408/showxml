@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
    <div class="card-header">
        Edit Feature
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
      <form method="post" action="{{ route('features.update', $feature->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
          
            <div class="form-group">
                <label for="bedrooms">Bedrooms:</label>
                <input type="text" class="form-control" name="bedrooms" value={{ $feature->bedrooms }} />
            </div>
            <div class="form-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="text" class="form-control" name="bathrooms" value={{ $feature->bathrooms }} />
            </div>
            <div class="form-group">
                <label for="rooms">Rooms:</label>
                <input type="text" class="form-control" name="rooms" value={{ $feature->rooms }} />
            </div>
            <div class="form-group">
                <label for="condition">Condition:</label>
                <input type="text" class="form-control" name="condition" value={{ $feature->condition }} />
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" value={{ $feature->age }} />
            </div>
            <div class="form-group">
                <label for="floor">Floor:</label>
                <input type="text" class="form-control" name="floor" value={{ $feature->floor }} />
            </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</div>
@endsection
