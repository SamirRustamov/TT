@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card card-default shadow-sm mt-5">
          <div class="card-header">
            <h3>Home Page</h3>
          </div>
          <div class="card-body">
            <h3>{{ Auth::check() ? 'Logged in' : 'Hello Guest' }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
