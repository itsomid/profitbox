@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div> <h1 class="logo-name"><img src="img/logo.png" width="100%" alt=""></h1></div>
        <h3 class="text-white">Register to Profit Box</h3>
        <p class="text-white">Create account to see it in action.</p>
        <form class="m-t" role="form"  method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
          </div>
          <div class="form-group">
            <div class="checkbox i-checks"><label class="text-white"> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
          </div>
          <button type="submit" class="btn btn-primary block full-width m-b" style="background-color: #24313E">Register</button>

          <p class="text-muted text-center text-white"><small>Already have an account?</small></p>
          <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
        </form>
        <p class="m-t"> <small>Seeb app &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
