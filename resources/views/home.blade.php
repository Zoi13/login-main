@extends('layouts.app')

@section('content')
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BILLING SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="transactionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Transaction
  </a>
  <div class="dropdown-menu" aria-labelledby="transactionDropdown">
    <a class="dropdown-item" href="#">Billing</a>
    <a class="dropdown-item" href="#">Reports</a>
  </div>
</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/administration') }}">Administration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/references') }}">References</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user-management') }}">User Management</a>
      </li>
    </ul>
  </div>
</nav>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
