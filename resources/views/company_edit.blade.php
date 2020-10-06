@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h2>EDIT COMPANY DATA</h2></div>
          <div class="card-body">
            <form action="{{ route('company-update', $comp -> id )}}" method="post">
              @csrf
              @method('POST')
              <div class="form-group">
                  <label for="name">NAME</label>
                  <br>
                  <input type="text" name="name" value="{{ $comp -> name}}">
              </div>

              <div class="form-group">
                  <label for="street">STREET</label>
                  <br>
                  <input type="text" name="street" value="{{ $comp -> street}}">
              </div>
              <div class="form-group">
                  <label for="city">CITY</label>
                  <br>
                  <input type="text" name="city" value="{{ $comp -> city}}">
              </div>
              <div class="form-group">
                  <label for="state">STATE</label>
                  <br>
                  <input type="text" name="state" value="{{ $comp -> state}}">
              </div>
              <div class="form-group">
                  <label for="phone_number">PHONE NUMBER</label>
                  <br>
                  <input type="text" name="phone_number" value="{{ $comp -> phone_number}}">
              </div>

              <br><br>
              <button type="submit">EDIT</button>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
