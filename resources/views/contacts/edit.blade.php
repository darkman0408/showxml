@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
    <div class="card-header">
        Edit Contact
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
      <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
          
            <div class="form-group">
                <label for="contact_title">Title:</label>
                <input type="text" class="form-control" name="contact_title" value={{ $contact->contact_title }} />
            </div>
            <div class="form-group">
                <label for="business_title">Business Title:</label>
                <input type="text" class="form-control" name="business_title" value={{ $contact->business_title }} />
            </div>
            <div class="form-group">
                <label for="contact_name">Name:</label>
                <input type="text" class="form-control" name="contact_name" value={{ $contact->contact_name }} />
            </div>
            <div class="form-group">
                <label for="contact_surname">Surname:</label>
                <input type="text" class="form-control" name="contact_surname" value={{ $contact->contact_surname }} />
            </div>
            <div class="form-group">
                <label for="contact_address">Address:</label>
                <input type="text" class="form-control" name="contact_address" value={{ $contact->contact_address }} />
            </div>
            <div class="form-group">
                <label for="contact_addressno">Addressno:</label>
                <input type="text" class="form-control" name="contact_addressno" value={{ $contact->contact_addressno }} />
            </div>
            <div class="form-group">
                <label for="contact_zipcode">Zip code:</label>
                <input type="text" class="form-control" name="contact_zipcode" value={{ $contact->contact_zipcode }} />
            </div>
            <div class="form-group">
                <label for="contact_city">City:</label>
                <input type="text" class="form-control" name="contact_city" value={{ $contact->contact_city }} />
            </div>
            <div class="form-group">
                <label for="contact_phone">Phone:</label>
                <input type="text" class="form-control" name="contact_phone" value={{ $contact->contact_phone }} />
            </div>
            <div class="form-group">
                <label for="contact_mobile">Mobile:</label>
                <input type="text" class="form-control" name="contact_mobile" value={{ $contact->contact_mobile }} />
            </div>
            <div class="form-group">
                <label for="contact_fax">Fax:</label>
                <input type="text" class="form-control" name="contact_fax" value={{ $contact->contact_fax }} />
            </div>
            <div class="form-group">
                <label for="contact_email">Email:</label>
                <input type="text" class="form-control" name="contact_email" value={{ $contact->contact_email }} />
            </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</div>
@endsection
