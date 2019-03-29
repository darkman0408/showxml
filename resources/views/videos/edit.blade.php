@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
    <div class="card-header">
        Edit Video
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
      <form method="post" action="{{ route('videos.update', $video->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
          
            <div class="form-group">
                <label for="video">Video:</label>
                <input type="text" class="form-control" name="video" value={{ $video->video }} />
            </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</div>
@endsection
