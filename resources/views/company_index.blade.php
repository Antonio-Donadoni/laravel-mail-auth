@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Companies Index</div>
                  <div class="card-body">
                    @foreach ($comps as $comp)
                      <h5><a href="{{ route('company-show', $comp -> id)}}">{{ $comp -> name}}</a></h5>
                    @endforeach
                  </div>
            </div>
            @auth
              <a class="btn btn-primary"href="{{ route('company-create')}}">INSERT NEW COMPANY</a>              
            @endauth
        </div>
    </div>
</div>
@endsection
