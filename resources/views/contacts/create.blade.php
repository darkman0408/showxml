@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Add Contact
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
        <form method="post" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="property_id">Property Code:</label>
                <input type="text" class="form-control" name="property_id" value="{{ $id }}" readonly/>
            </div>
            <div class="form-group">
                <label for="contact_title">Title:</label>
                <input type="text" class="form-control" name="contact_title"/>
            </div>
            <div class="form-group">
                <label for="business_title">Business Title:</label>
                <input type="text" class="form-control" name="business_title"/>
            </div>
            <div class="form-group">
                <label for="contact_name">Name:</label>
                <input type="text" class="form-control" name="contact_name"/>
            </div>
            <div class="form-group">
                <label for="contact_surname">Surname:</label>
                <input type="text" class="form-control" name="contact_surname"/>
            </div>
            <div class="form-group">
                <label for="contact_address">Address:</label>
                <input type="text" class="form-control" name="contact_address"/>
            </div>
            <div class="form-group">
                <label for="contact_addressno">Addressno:</label>
                <input type="text" class="form-control" name="contact_addressno"/>
            </div>
            <div class="form-group">
                <label for="contact_zipcode">Zipcode:</label>
                <input type="text" class="form-control" name="contact_zipcode"/>
            </div>
            <div class="form-group">
                <label for="contact_city">City:</label>
                <input type="text" class="form-control" name="contact_city"/>
            </div>
            <div class="form-group">
                <label for="contact_phone">Phone:</label>
                <input type="text" class="form-control" name="contact_phone"/>
            </div>
            <div class="form-group">
                <label for="contact_mobile">Mobile:</label>
                <input type="text" class="form-control" name="contact_mobile"/>
            </div>
            <div class="form-group">
                <label for="contact_fax">Fax:</label>
                <input type="text" class="form-control" name="contact_fax"/>
            </div>
            <div class="form-group">
                <label for="contact_email">Email:</label>
                <input type="text" class="form-control" name="contact_email"/>
            </div>

            <button type="submit" class="btn btn-primary">Submit and Continue >></button>
        </form>
    </div>
</div>
@endsection