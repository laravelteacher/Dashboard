@extends('layouts.dashboardSign')
@section('content')
  <p class="login-box-msg">Sign in to start your session</p>
  <form action="{{ route('login') }}" method="post">
  @csrf
    <div class="form-group has-feedback">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
        @enderror
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
        @enderror
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-8">
         <div class="checkbox icheck">
         </div>
         <p>Forgot
            <a class="nav-link" href="{{ route('password.request') }}">Your Password?</a></p>
            <p>create new account?<a class="nav-link" href="{{ route('register') }}">SignUp</a></p>
      </div>
      <div class="col-xs-4">
         <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
      </div>
    </div>
  </form>
@endsection