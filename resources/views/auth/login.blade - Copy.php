@extends('layouts.login_header')

@section('content')
    <!-- login Form -->
	<div class="login-section">
    <div class="container index">
   
        <!--<h1 class="title">Please Login</h1>-->
        <form action="{{route('login')}}" method="post">
            @csrf
            <h4>I am a</h4>
            
            <div class="form-group">
                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" >
			</div>
			
			<div class="form-group">
				@error('email')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
            
           
				
				  
                        
                
                <div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">
                                    {{ __('Login') }}
                                </button>
                </div>
                      
            
        </form>
    </div>
	</div>
@endsection

