@extends('layouts.login_header')

@section('content')
    <!-- login Form -->
	<div class="login-section">
    <div class="container index">
   
        <!--<h1 class="title">Please Login</h1>-->
        <form action="{{route('login')}}" method="post">
            @csrf
            <h4>Please Login</h4>
            
            <div class="form-group">
                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" >
			</div>
			
			<div class="form-group">
				@error('email')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
            
            <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password" >
                </div>
				
				<div class="form-group">
				@error('password')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
				
				     <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        
                
                <div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">
                                    {{ __('Login') }}
                                </button>
                </div>
                        <div class="text-center m-3"><h5 style="color:#fff;">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</h5>
                        </div>
                <div class="text-center m-3"><h5 style="color:#fff;">Don't have an account? <a href="{{route('register')}}">Register Now</a></h5></div>
                <div class="or-seperator"><b>OR</b></div>
                <h5 style="color:#fff;">Login with social media</h5>
                <div class="social-btn text-center">
                    <a href="{{route('facebook.login')}}" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{{route('google.login')}}" class="btn btn-danger"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-brands fa-instagram"></i></a>
                </div>
        </form>
    </div>
	</div>
@endsection

