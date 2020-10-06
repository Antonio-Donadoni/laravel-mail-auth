@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header"><h2>{{ $comp -> name}}</h2></div>
                <div class="card-body">
                  <ul>
                    <li>
                      <h5>COMPLETE ADDRESS:</h5>
                      {{ $comp -> street}} - {{ $comp -> city}}({{ $comp -> state}})
                    </li>
                    <br><br>
                    <li>
                      <h5>PHONE NUMBER:</h5>
                      {{ $comp -> phone_number}}
                    </li>
                  </ul>
                  @auth
                    <a class ="btn btn-primary" href="{{ route('company-edit', $comp -> id)}}">EDIT</a>
                    <a class ="btn btn-danger" href="{{ route('company-destroy', $comp -> id)}}">DELETE</a>
                  @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
