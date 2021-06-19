@extends('layouts.dashboardSign')
@section('content')
  <p class="login-box-msg">Sign in to start your session</p>
  <form action="{{ route('register') }}" method="post">
  @csrf
   <div class="form-group">
    <label for="name" class="col-form-label">Name</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
      @enderror
   </div>
   <div class="form-group">
      <label for="email" class="col-form-label">E-Mail Address</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
      @error('email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
      @enderror
   </div>
   <div class="form-group">
      <label for="password" class="col-form-label">Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
   </div>
   <div class="form-group">
      <label for="password-confirm" class="col-form-label">Confirm Password</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
   </div>
   <div class="form-group">
      <button type="submit" class="btn btn-primary">
         {{ __('Register') }}
      </button>
   </div>
  </form>
@endsection