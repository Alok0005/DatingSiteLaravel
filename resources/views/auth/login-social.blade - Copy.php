
@extends('layouts.login_header')

@section('content')

    <!-- login Form -->
	<div class="login-section">
    <div class="container index">
   
        <!--<h1 class="title">Please Login</h1>-->
        <form action="{{route('loginConfirm')}}" method="post">
            @csrf
            <h4>I am a</h4>
            <input id="password-confirm" type="hidden" value="{{$provider_id}}" class="form-control" name="provider_id">
            <div class="form-group">
               <select  name="gender" required autocomplete="gender">
			 <option value="">Chose Gender</option>
				<option value="Man">Man</option>
				 <option value="Woman">Woman</option>
              </select>
			</div>
			
			<div class="form-group">
               <select  name="looking_for" required autocomplete="looking_for">
			 <option value="">Looking For</option>
				<option value="Man">Man</option>
				 <option value="Woman">Woman</option>
              </select>
			</div>
			
			<div class="form-group">
				@error('gender')                                 
						<strong style="color:#e37d7d;">{{ $message }}</strong>                                   
				@enderror
			</div>
            
           
				
				  
                        
                
                <div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">
                                    {{ __('Continue Login') }}
                                </button>
                </div>
                      
            
        </form>
    </div>
	</div>
@endsection

