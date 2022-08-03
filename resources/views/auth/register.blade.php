@extends('layouts.login_header')

@section('content')

    <!-- Signup Form -->
    <div class="container index">
	@if(Session::has('error'))	
<p class="alert
{{ Session::get('alert-class', 'alert-danger' ) }}">{{Session::get('error') }}
<button type="button" class="close" data-dismiss="alert">×</button>  
</p>
@endif
	@if(Session::has('success'))	
<p class="alert
{{ Session::get('alert-class', 'alert-success' ) }}">{{Session::get('success') }}
<button type="button" class="close" data-dismiss="alert">×</button>  
</p>
@endif
        <h1 class="title">Webtrills Registration</h1>
        <form action="{{url('register')}}" method="POST">
		  @csrf
            <h4>Register Now</h4>
            
            <div class="form-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
            </div>
			<div class="form-group">
				@error('name')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
			
            <div class="form-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                </div>
			<div class="form-group">
				@error('email')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
		
			
            <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                </div>
				<div class="form-group">
				@error('password')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
				
                <div class="form-group">
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">Get Started Now
                        <a href="{{route('otp-verification')}}">  </a>
                    </button>

                <div class="text-center m-3"><h5>Are you a member? <a href="{{route('login')}}">Login</a></h5></div>
                <div class="or-seperator"><b>OR</b></div>
                <h5>Login with social media</h5>
                <div class="social-btn text-center">
                    <a href="{{route('facebook.login')}}" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{{route('google.login')}}" class="btn btn-danger"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-brands fa-instagram"></i></a>
                </div>
        </form>
    </div>
    <!-- End Signup Form -->

<script>

    
var pass1 = document.getElementById("password")

  , pass2= document.getElementById("confirmpassword");
  function validatePassword(){

  if(pass1.value != pass2.value) {

    pass2.setCustomValidity("Password Don't Match");

  } else {

    pass2.setCustomValidity('');

  }

}
    
pass1.onchange = validatePassword;

pass2.onkeyup = validatePassword;

</script>
@endsection
