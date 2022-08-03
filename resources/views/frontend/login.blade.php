
    <!-- login Form -->
	<div class="login-section">
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
        <!--<h1 class="title">Please Login</h1>-->
        <form action="{{route('login-step2')}}" method="post">
            @csrf
            <h4>Please Login</h4>
            
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="email" id="username" placeholder="User Name" required>
            </div>
            
            <div class="form-group">
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">Submit</button>
                </div>

                <div class="text-center m-3"><h5 style="color:#fff;">Don't have an account? <a href="{{route('signup')}}">Register Now</a></h5></div>
                <div class="or-seperator"><b>OR</b></div>
                <h5 style="color:#fff;">Login with social media</h5>
                <div class="social-btn text-center">
                    <a href="#" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-brands fa-instagram"></i></a>
                </div>
        </form>
    </div>
	</div>
    <!-- End login Form -->
