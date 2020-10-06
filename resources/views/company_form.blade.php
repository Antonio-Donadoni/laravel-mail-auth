@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h2>NEW COMPANY DATA</h2></div>
          <div class="card-body">
            <form action="{{ route('company-store')}}" method="post">
              @csrf
              @method('POST')
              <div class="form-group">
                  <label for="name">NAME</label>
                  <br>
                  <input type="text" name="name" value="">
              </div>

              <div class="form-group">
                  <label for="street">STREET</label>
                  <br>
                  <input type="text" name="street" value="">
              </div>
              <div class="form-group">
                  <label for="city">CITY</label>
                  <br>
                  <input type="text" name="city" value="">
              </div>
              <div class="form-group">
                  <label for="state">STATE</label>
                  <br>
                  <input type="text" name="state" value="">
              </div>
              <div class="form-group">
                  <label for="phone_number">PHONE NUMBER</label>
                  <br>
                  <input type="text" name="phone_number" value="">
              </div>

              <br><br>
              <button type="submit">CREATE</button>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
