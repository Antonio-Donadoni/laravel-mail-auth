@extends('mail.layouts.app')

@section('content')

<h1>USERNAME: {{$user -> name}} / ACTION: {{ $action }}</h1>
<div class="container">
    <div class="row justify-content-center">
      <h2>{{ $comp -> name}}</h2>
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
    </div>
</div>
@endsection
