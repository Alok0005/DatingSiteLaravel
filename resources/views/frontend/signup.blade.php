
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
        <form action="{{url('signup/register')}}" method="POST">
		 {!! csrf_field() !!}
            <h4>Register Now</h4>
            
            <div class="form-group">
                <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Name" required  pattern="[a-zA-Z][a-zA-Z0-9\s]*">
            </div>
			<div class="form-group">               
             <select class="form-select input-lg" name="gender" required>
			 <option value="">Chose Gender</option>
				<option value="Man">Man</option>
				 <option value="Woman">Woman</option>
              </select>
			</div>
            <div class="form-group">
                  <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
            <div class="form-group">
                    <input type="password" class="form-control input-lg" id="password" name="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" id="confirmpassword" name="confirmpassword" required placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">Get Started Now</button>
                </div>

                <div class="text-center m-3"><h5>Are you a member? <a href="{{route('login')}}">Login</a></h5></div>
                <div class="or-seperator"><b>OR</b></div>
                <h5>Register with social media</h5>
                <div class="social-btn text-center">
                    <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-brands fa-google"></i></a>
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