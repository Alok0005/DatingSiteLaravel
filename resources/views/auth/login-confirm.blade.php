
@extends('layouts.login_header')

@section('content')
<style>
.eadit-button-new {
   padding: 20px 0px;
    margin-bottom: 20px;
    text-align: center;
}
.eadit-button-new li {
    list-style-type: none;
}
.eadit-button-new li button {
    line-height: 41px;
    border: 1px solid #fff;
	padding: 3px 40px;
    background: #03a9f4;
    color: #fff;
}
.lab-btn:hover {
    background-color: #df314d;
    color: #fff;
    box-shadow: 3px 3px 0 currentColor;
}
</style>
    <!-- login Form -->
	<div class="login-section"  style="background-color: #643ad7; padding: 75px 0px; margin: 0px 0px 0px;">
    <div class="container">
        <form action="{{route('loginConfirm')}}" method="post">
            @csrf
			<h4 style="text-align: center; padding: 20px 0px; color: #fff; font-size: 29px;">Profile Details</h4>
			 <div class="row">
                <div class="col-lg-6">			 
                <div class="form-group info-name">
				<p style="color:#fff;">Date Of Birth</p>
				<input type="hidden" name="email" value="{{$email}}" class="form-details">
                    <input type="date" name="dob" placeholder="Date of Birth" class="form-details" required>
                </div>
               </div>
                 <div class="col-lg-6">			 
                <div class="form-group info-name">
				<p style="color:#fff;">Gender</p>
                    <li style="width:70%; list-style-type: none;">          
                      <select class="form-select new2" style="display: none;" name="gender" required>
                   <option value="">Choose now</option>
				   <option value="Male">Male</option>
                <option value="Female">Female</option>
               </select>
              </li>
				</div>
                 </div>
              
    <div class="col-lg-6">			 
            <div class="form-group info-name">
			 <p style="color:#fff;">Looking for</p>
               <li style="width:70%; list-style-type: none;">          
                 <select class="form-select new2" name="looking_for" style="display: none;" required>
                  <option value="">Choose now</option>
				   <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>			 
              </li>
				</div>
                   </div>
				   <div class="col-lg-6">			 
            <div class="form-group info-name">
			 <p style="color:#fff;">Marital Status</p>			 
			 <li style="width:70%; list-style-type: none;">          
                 <select class="form-select new2" style="display: none;" name="marital_status" required>
                  <option value="">Choose now</option>
				  <option value="Never Marrid">Never Marrid</option>
                 <option value="Separated">Separated</option>
				  <option value="Divorced">Divorced</option>
				   <option value="Widowed">Widowed</option>
				    <option value="Tell you later">Tell you later</option>
                </select>			 
              </li>
				</div>
                   </div>
	
	
        <div class="col-lg-6">			 
           <div class="form-group info-name">
			 <p style="color:#fff;">Education</p>
			 <li style="width:70%; list-style-type: none;">          
               <select class="form-select new2" style="display: none;" name="education" required>
                <option value="">Choose now</option>
				<option value="High school graduate">High school graduate</option>
                 <option value="No degree">No degree</option>
				  <option value="Attended college">Attended college</option>
				   <option value="Advanced degree">Advanced degree</option>
				    <option value="College graduate">College graduate</option> 
                </select>			 
              </li>           
				</div>
                 </div>
	
		   <div class="col-lg-6">			 
            <div class="form-group info-name">
			 <p style="color:#fff;">Religion</p>
			  <li style="width:70%; list-style-type: none;">          
               <select class="form-select new2" style="display: none;" name="religion" required>
                <option value="">Choose now</option>
				<option value="Hindu">Hindu</option>
                 <option value="Muslim">Muslim</option>
				  <option value="Spiritual">Spiritual</option>
				   <option value="Sikh">Sikh</option>
				    <option value="Jewish">Jewish</option>
                     <option value="Christian - Catholic">Christian - Catholic</option>
				      <option value="Christian">Christian</option>
				       <option value="Buddhist">Buddhist</option>					
                </select>			 
              </li>	
				</div>
                 </div>
		<div class="col-lg-6">			 
           <div class="form-group info-name">
			 <p style="color:#fff;">Smoking</p>
			 <li style="width:70%; list-style-type: none;">          
               <select class="form-select new2" style="display: none;" name="smoking" required>
                <option value="">Choose now</option>
				<option value="No">No</option>
                 <option value="socially">Yes, socially</option>
				  <option value="regularly">Yes, regularly</option>				
                </select>			 
              </li>
				</div>
                 </div>
		<div class="col-lg-6">			 
           <div class="form-group info-name">
			 <p style="color:#fff;">Body Type</p>
			 <li style="width:70%; list-style-type: none;">          
               <select class="form-select new2" style="display: none;" name="body_type" required>
                <option value="">Choose now</option>
				<option value="Slim">Slim</option>
                 <option value="Athletic">Athletic</option>
				  <option value="Average">Average</option>		
                   <option value="Stout">Stout</option>					  
                </select>			 
              </li>
				</div>
                 </div>
				 <div class="col-lg-6">			 
           <div class="form-group info-name">
			 <p style="color:#fff;">Height</p>
               <input type="number" placeholder="178 cm" name="height" class="form-new" style="width: 70%;border-radius: 5px; border: none; padding: 0px 15px;" required>
				</div>
                 </div>
				<div class="eadit-button-new">
				<li><input type="submit" value="Continue Login" class="lab-btn" required style=" width: 200px; background: #23c5ff;  padding: 10px; font-size: 20px; color: #fff; border: 1px solid; border-radius: 5px;"></li>													  
				</div>
               </div>
                
            
        </form>
    </div>
	</div>
@endsection

