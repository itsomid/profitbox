@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div>
          <h1 class="logo-name">
          <img src="img/logo.png" width="100%" alt="">
          </h1>
      </div>
      <h2 class="text-white">Welcome to ProfitBox</h2>

      <p class="text-white">Login in. To see it in action.</p>
      <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
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
       <button type="submit" class="btn btn-primary block full-width m-b" style="background-color: #24313E">Login</button>

       <a href="{{ route('password.request') }}" ><small >Forgot password?</small></a>
       <p class="text-muted text-center text-white"><small>Do not have an account?</small></p>
       <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
      </form>
      <p class="m-t"> <small>Seeb app &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
