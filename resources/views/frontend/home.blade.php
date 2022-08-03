  <link rel="stylesheet" href="frontend/css/style-new.css">


  <body>
      <!-- ==========Page Header Section Start Here========== -->
      <section class="page-header-section style-1" style="padding: 65px 0px 0px !important;">
          <div class="container">
    
			  <div class="page-header-content">
                  <div class="page-header-inner">
                      <div class="page-title">
                          <h2>Member Single Profile</h2>
                      </div>
                      <ol class="breadcrumb">
                          <li><a href="{{route('index')}}">Home</a></li>
                          <li class="active"></li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>

      <!-- ==========Page Header Section Ends Here========== -->
      <!-- ==========Profile Section Start Here========== -->
      <section class="profile-section padding-tb" style="padding: 0px !important;">
          <div class="container-fluid">
              <div class="section-wrapper">
			  	  @if(Session::has('error'))	
<p class="alert
{{ Session::get('alert-class', 'alert-danger' ) }}">{{Session::get('error') }}
<button type="button" class="close" data-dismiss="alert" style="margin-left: 400px; margin-right: 400px;">×</button>  
</p>
@endif
	@if(Session::has('success'))	
<p class="alert
{{ Session::get('alert-class', 'alert-success' ) }}">{{Session::get('success') }}
<button type="button" class="close" data-dismiss="alert">×</button>  
</p>
@endif
                  <div class="member-profile">
                      <div class="profile-item">
                          <div class="profile-cover">
                              <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                                   {!! csrf_field() !!}
								   @if(!empty("$data->cover_img"))
								  <img src="{{'storage/profile/'.$data->cover_img.''}}" alt="cover-pic" >
                                  @else
									  <img src="frontend/images/profile/cover.jpg" alt="cover-pic">
								  @endif
								  <div class="edit-photo custom-upload">
                                      <div class="file-btn"><i class="icofont-camera"></i>
                                          Edit Photo</div>

                                      <input type="file" id="mediaFile" value="" class="form-control" name="cover_img" onchange="this.form.submit()"/>
                                  
								  </div>
								   
                              </form>
                          </div>


                          <div class="profile-information">
                              <div class="profile-pic">
                                  <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                                   {!! csrf_field() !!}
								    @if(!empty("$data->profile_img"))
                                      <img src="{{'storage/profile/'.$data->profile_img.''}}" alt="DP">
                                       @else
										   <img src="{{'storage/profile/'.$user->image.''}}" alt="DP">
								  @endif
									  <div class="custom-upload">
                                          <div class="file-btn">
                                              <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                                  Edit</span>
                                              <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span>
                                          </div>
                                           <input type="file" id="mediaFile" value="" class="form-control" name="profile_img" onchange="this.form.submit()"/>
                                      </div>
									  </form>
                              </div>
                              <div class="profile-name">
                                  <h4>{{$data->name}}</h4>
                                  <p>{{$user->last_login_at}}</p>
                              </div>
                              </form>
                          </div>
                      </div>
                      <div class="profile-item d-none">
                          <div class="lab-inner">
                              <div class="lab-thumb">
                                  <a href="#"><img src="frontend/images/profile/Profile.jpg" alt="profile"></a>
                              </div>
                              <div class="lab-content">
                                  <div class="profile-name">
                                      <div class="p-name-content">
                                          <h4>Rekha Rajput</h4>
                                          <p>Active 02 Minutes Ago</p>
                                      </div>

                                      <div class="contact-button">
                                          <button class="contact-btn">
                                              <i class="icofont-info-circle"></i>
                                          </button>
                                      </div>
                                  </div>
                                  <ul class="profile-contact">
                                      <li>
                                          <a href="#">
                                              <div class="icon"><i class="icofont-user"></i></div>
                                              <div class="text">
                                                  <p>Add Friends</p>
                                              </div>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <div class="icon"><i class="icofont-envelope"></i></div>
                                              <div class="text">
                                                  <p>Publice Message</p>
                                              </div>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <div class="icon"><i class="icofont-envelope"></i></div>
                                              <div class="text">
                                                  <p>Private Message</p>
                                              </div>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="profile-details">
                          <nav class="profile-nav">
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link active" id="nav-ativity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">Edit_Profile</button>
                                  
                                  <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab" data-bs-target="#friends" type="button" role="tab" aria-controls="friends" aria-selected="false">Friends <span class="item-number">16</span></button>
								   <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Massage</button>

                                  <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="false">Photos</button>

                                  <div class="dropdown">
                                      <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          More
                                      </a>

                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">Activity</a></li>
                                          <li><a class="dropdown-item" href="#">Privacy</a></li>
                                          <li><a class="dropdown-item" href="#">Block user</a></li>
                                      </ul>
                                  </div>

                              </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                             
							 <!-- Activity tab -->
                              
							  <div class="tab-pane activity-page fade show active" id="activity" role="tabpanel">
                               <div>
        <div class="row">
            <div class="col-xl-12" >
            <article>
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
               <div class="info-card-title">
                      <div class="row">
                      <div class="col-md-11">
                          <h6>Base Info</h6>
                      </div>
                      <div class="col-md-1">
                      <div id="edit-btn">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                           </div>
                           </div>
                           </div>
                      </div>
                  <div class="info-card mb-20">
                     
                      <div class="info-card-content" id="hide1">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Name</p>
                                 <p>{{ $data->name ?? ''}}</p>
                              </li>
                              <li>
                                  <p class="info-name">I'm a</p>                                            
                                    <p>{{ $data->gender}}</p>                                      
                              </li>
                              <li>
                                  <p class="info-name">Loking for a</p>
                                  
                                    <p>{{ $data->looking_for}}</p>
                                    
                              </li>
                              <li>
                                  <p class="info-name">Marital Status</p>
                             
                                    <p>{{ $data->marital_status}}</p>
                                 
                              </li>
                              <li>
                                  <p class="info-name">Age</p>
                                 <p>{{ $data->age}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Date of Birth</p>
                                 <p>{{ $data->dob}}</p>
                              </li>
                              <li>
                                  <p class="info-name">City</p>
                                 <p>{{ $data->address}}</p>
                              </li>
                              
                          </ul>
                        
                      </div>
                      <div class="info-card-content" id="hide-div">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Name</p>
                                 <input type="text" name="name" value="{{ $data->name ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">I'm a</p>
                                  <select class="form-select new" name="gender">
                                    <option value="Man" @if($data->gender == 'Man') selected @endif >Man</option>
                                     <option value="Women" @if($data->gender == 'Women') selected @endif >Woman</option>
                                                                                                          
                                           </select>
                              </li>
                              <li>
                                  <p class="info-name">Loking for a</p>
                                  <select class="form-select new" name="looking_for">
                                    <option value="Women" @if($data->looking_for == 'Women') selected @endif>Woman</option>
                                     <option value="Man" @if($data->looking_for == 'Man') selected @endif >Man</option>
                                                                                                          
                                           </select>
                              </li>
                              <li>
                                  <p class="info-name">Marital Status</p>
                                 <select class="form-select new" name="marital_status">
                                    <option value="Married" @if($data->marital_status == 'Married') selected @endif >Married </option>
                                     <option value="Single" @if($data->marital_status == 'Single') selected @endif >Single</option>
                                                                                                          
                                           </select>
                              </li>
                              <li>
                                  <p class="info-name" >Age</p>
                                  <select class="form-select new" name="age">
                                    <option value="17" @if($data->age == '17') selected @endif >17 </option>
                                     <option value="18" @if($data->age == '18') selected @endif >18</option>
                                     <option value="19" @if($data->age == '19') selected @endif >19</option>
                                     <option value="20" @if($data->age == '20') selected @endif >20</option>
                                     <option value="21" @if($data->age == '21') selected @endif >21</option> 
                                     <option value="22" @if($data->age == '22') selected @endif >22</option>
                                     <option value="23" @if($data->age == '23') selected @endif >23</option>
                                     <option value="24" @if($data->age == '24') selected @endif >24</option>
                                     <option value="25" @if($data->age == '25') selected @endif >25</option>
                                     <option value="26" @if($data->age == '26') selected @endif >26</option>
                                     <option value="27" @if($data->age == '27') selected @endif >27</option>
                                     <option value="28" @if($data->age == '28') selected @endif >28</option>
                                     <option value="29" @if($data->age == '29') selected @endif >29</option>
                                     <option value="30" @if($data->age == '30') selected @endif >30</option>
                                     <option value="31" @if($data->age == '31') selected @endif >31</option>
                                     <option value="32" @if($data->age == '32') selected @endif >32</option>
                                     <option value="33" @if($data->age == '33') selected @endif >33</option>
                                     <option value="34" @if($data->age == '34') selected @endif >34</option>
                                     <option value="35" @if($data->age == '35') selected @endif >35</option>
                                           </select>
                              </li>
                              <li>
                                  <p class="info-name">Date of Birth</p>
                                 <input type="date" placeholder="Date of Birth" name="dob" value="{{ $data->dob ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">City</p>
                                  <textarea class="form-control form-new"  name="address"  rows="4" style="width:50%;">{{ $data->address ?? ''}}</textarea>
                              </li>
                              
                          </ul>
                        <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>
                      </div>
                  </div>

                  <!--<div class="info-card-title">
                      <div class="row">
                      <div class="col-md-11">
                          <h6>Myself Summary</h6>
                      </div>
                      <div class="col-md-1">
                      <div id="edit-btn2">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                           </div>
                           </div>
                           </div>
                      </div>
                       <div class="info-card mb-20">                                                  
                      <div class="info-card-content" id="hide2" style="height: 200px;">
                          <p>{{$data->summary}}</p>
                             
                      </div>													
                  </div>		 
                  <div class="info-card mb-20" id="hide-div2">                                             
                      <div class="info-card-content">
                          <textarea class="form-control form-new" placeholder="Myself Summary"  name="summary"  rows="10" style="width:90%;">{{ $data->summary ?? ''}}</textarea>
                         <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>   
                      </div>
                       
                  </div>-->
                   
                  <div class="info-card mb-20">
                      <div class="info-card-title">
                      <div class="row">
                      <div class="col-md-11">
                          <h6>Looking For</h6>
                      </div>
                      <div class="col-md-1">
                      <div id="edit-btn3">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                           </div>
                           </div>
                           </div>
                      </div>
                      <div class="info-card-content" id="hide3">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Things I'm looking for</p>
                                  <p>{{ $data->like}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Whatever I like</p>
                                  <p>{{ $data->looking}}</p>
                              </li>
                          </ul>
                            
                      </div>
                      <div class="info-card-content" id="hide-div3">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Things I'm looking for</p>
                                  <input type="text" placeholder="I want a funny person" name="like" value="{{ $data->like ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Whatever I like</p>
                                  <input type="text" placeholder="I want a funny person" name="looking" value="{{ $data->looking ?? ''}}" class="form-new">
                              </li>
                          </ul>
                            <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>
                      </div>
                       
                  </div>
                  <div class="info-card mb-20">
                      <div class="info-card-title">
                      <div class="row">
                      <div class="col-md-11">
                          <h6>Lifestyle</h6>
                      </div>
                      <div class="col-md-1">
                      <div id="edit-btn4">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                           </div>
                           </div>
                           </div>
                      </div>
                      <div class="info-card-content" id="hide4">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Interest</p>                                                               
                                           <p>{{ $data->interest}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Favorite vocations spot</p>                                                              
                                           <p>{{ $data->favorite_spot}}</p>
                              </li>
                              
                              <li>
                                  <p class="info-name">Smoking</p>
                                 
                                  <p>{{ $data->smoking }}</p>
                              </li>
                              <li>
                                  <p class="info-name">Language</p>                                                       
                                  <p>{{ $data->language }}</p>
                              </li>
                          </ul>
                            
                      </div>
                      <div class="info-card-content" id="hide-div4">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Interest</p>
                                  <input type="text" placeholder="Interest" name="interest" value="{{ $data->interest ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Favorite vocations spot</p>
                                  <input type="text" placeholder="Favorite vocations spot" name="favorite_spot" value="{{ $data->favorite_spot ?? ''}}" class="form-new">
                                
                              </li>
                              <li>
                                  <p class="info-name">Smoking</p>
                                 
                                  <select class="form-select new" name="smoking">
                                    <option value="Casual" @if($data->age == 'Casual') selected @endif >Casual</option>
                                     <option value="Smoker" @if($data->age == 'Smoker') selected @endif >Smoker</option>
                                     <option value="Non Smoker" @if($data->age == 'Non Smoker') selected @endif >Non Smoker</option>                                                            
                                           </select>
                              </li>
                              <li>
                                  <p class="info-name">Language</p>                                                       
                                  <select class="form-select new" name="language">
                                    <option value="English" @if($data->age == 'English') selected @endif >English</option>
                                     <option value="Hindi" @if($data->age == 'Hindi') selected @endif >Hindi</option>
                                     <option value="Italian" @if($data->age == 'Italian') selected @endif >Italian</option>                                                            
                                           </select>
                              </li>
                          </ul>
                            <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>
                      </div>
                  </div>
                  <div class="info-card">
                      <div class="info-card-title">
                      <div class="row">
                      <div class="col-md-11">
                          <h6>Physical info</h6>
                      </div>
                      <div class="col-md-1">
                      <div id="edit-btn5">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                           </div>
                           </div>
                           </div>
                      </div>
                      <div class="info-card-content" id="hide5">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Height</p>                                                          
                                  <p>{{ $data->height}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Weight</p>                                          
                                  <p>{{ $data->weight}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Hair Color</p>
                                  <p>{{ $data->hair_color}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Eye Color</p>
                                  <p>{{ $data->eye_color}}</p>
                              </li>
                              <li>
                                  <p class="info-name">Body Type</p>
                                  
                                  <p>{{ $data->body_type}}</p>
                              </li>
                              
                          </ul>

                      </div>
                      
                      <div class="info-card-content" id="hide-div5">
                          <ul class="info-list">
                              <li>
                                  <p class="info-name">Height</p>
                                  <input type="text" placeholder="Enter height" name="height" value="{{ $data->height ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Weight</p>
                                  <input type="text" placeholder="Enter Weight" name="weight" value="{{ $data->weight ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Hair Color</p>
                                  <input type="text" placeholder="Enter hair color" name="hair_color" value="{{ $data->hair_color ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Eye Color</p>
                                  <input type="text" placeholder="Enter eye color" name="eye_color" value="{{ $data->eye_color ?? ''}}" class="form-new">
                              </li>
                              <li>
                                  <p class="info-name">Body Type</p>
                                  <input type="text" placeholder="Enter body type" name="body_type" value="{{ $data->body_type ?? ''}}" class="form-new">
                              </li>
                              
                          </ul>
                             <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>
                      </div>
					  
					  
					  
					  
					  
                  </div>
				  <div class="info-card-title" style="margin-top:15px;">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Myself Summary</h6>
                                                    </div>
													<div class="col-md-2">
													<div id="edit-btn2">
													<i class="fa fa-pencil" aria-hidden="true"></i>
                                                         </div>
														 </div>
														 </div>
													</div>
                                                     <div class="info-card mb-20" style="margin-bottom:0px !important">                                                  
                                                    <div class="info-card-content" id="hide2" style="height: 200px;">
                                                        <p>{{ $data->summary}}</p>
                                                           
                                                    </div>													
                                                </div>		 
                                                <div class="info-card mb-20" id="hide-div2">                                             
                                                    <div class="info-card-content">
                                                        <textarea class="form-control form-new" name="summary" placeholder="Myself Summary" rows="10" style="width:90%;">{{ $data->summary ?? ''}}</textarea>
                                                       <div class="eadit-button">
                        <li>
                            <button type="submit" value="submit" class="lab-btn">Submit</button>
                            </li>													  
                        </div>   
                                                    </div>
													 
                                                </div>
				  
                  </form>
                  
              </article>
            </div>


        </div>
    </div>
							</div>


                              <!-- Profile tab -->
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
     <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-12" style="padding:0;">
                                            <article>
                                                <div class="activity-tab">
                                                    <div class="info-card-title">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Please Type here..</h6>
                                                    </div>
													
														 </div>
													</div>
                                                   <div class="info-card mb-20">                                                  
                                                    <div class="info-card-content section1" style="height: 200px;">
                                                        <p>Please Type here..</p>
                                                           
                                                    </div>

                                                </div>
												<div class="info-card mb-20 blue" id="">                                             
                                                    <div class="info-card-content">
                                                        <textarea class="form-control form-new" placeholder="Myself Summary" rows="10" style="width:90%;" ></textarea>
                                                       <div class="eadit-button">
													  <li>
                                                          <button type="button" value="submit" class="lab-btn">Submit</button>
                                                          </li>													  
													  </div>   
                                                    </div>
													 
                                                </div>
                                            
                                        </div>
                                          </article>
                                        
                                       
                                    </div>
                                </div>
                            </div>
</div>
                              <!-- Frinds Tab -->
                              <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="nav-friends-tab">
                                  <div>
                                      <div class="row">
                                          <div class="col-xl-12">
                                              <article>
                                                  <div class="row gy-4 gx-3 justify-content-center">
                                                      <div class=" col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/01.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha </a> </h6>
                                                                      <p>Active 1 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/02.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 2 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/03.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 5 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/04.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 4 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/05.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 1 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/06.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 3 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/07.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 3 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/08.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 5 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/09.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 5 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/10.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 1 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/11.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 4 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/12.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 2 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/13.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Irfan Patel </a> </h6>
                                                                      <p>Active 5 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/14.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rekha</a> </h6>
                                                                      <p>Active 1 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/15.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">P.K</a> </h6>
                                                                      <p>Active 2 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/16.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Rajput</a> </h6>
                                                                      <p>Active 6 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/17.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Hina</a> </h6>
                                                                      <p>Active 4 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/18.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Virat</a> </h6>
                                                                      <p>Active 3 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/19.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Prashant</a> </h6>
                                                                      <p>Active 5 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="frontend/images/member/20.jpg" alt="member-img">
                                                                  </div>
                                                                  <div class="lab-content">
                                                                      <h6><a href="#">Jason Roy</a> </h6>
                                                                      <p>Active 2 Day</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </article>
                                          </div>


                                      </div>
                                  </div>
                              </div>
                              <!-- Group Tab -->
                              <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="nav-groups-tab">
                                  <div>
                                      <div class="row">
                                          <div class="col-xl-8">
                                              <article>
                                                  <div class="row gy-3">
                                                      <div class="col-12">
                                                          <div class="group-item lab-item style-1">
                                                              <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                  <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                      <img src="assets/images/group/group-page/01.jpg" alt="img">
                                                                  </div>

                                                              </div>
                                                          </div>
                                                      </div>

                                                  </div>
                                              </article>
                                          </div>


                                      </div>
                                  </div>
                              </div>
                              <!-- Photos Tab -->
                              <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="nav-photos-tab">
                                  <div class="photo-title text-center border-radius-2 bg-theme p-1 mb-4">
                                      <h3 class="mb-0">All Uploaded Pictures</h3>
                                  </div>
                                  <div class="row g-3 g-lg-4 justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6">
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/03.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/02.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/01.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/04.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/05.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/06.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/07.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/08.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/09.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/10.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/11.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/12.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/13.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/14.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/15.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/16.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/17.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/18.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/19.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="gallery-img">
                                              <img src="frontend/images/member/20.jpg" alt="image" class="rounded">

                                          </div>
                                      </div>
                                  </div>
                                  <div class="edit-photo custom-upload new-upload-btn">
                                      <div class="file-btn"><i class="icofont-camera"></i>
                                          Upload Images</div>

                                      <input type="file" id="mediaFile" value="" class="form-control" name="image" />
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- All Scripts -->
      <script src="frontend/js/jquery.js"></script>
      <script src="frontend/js/bootstrap.bundle.min.js"></script>
      <script src="frontend/js/functions.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </body>
  <script>
$(document).ready(function(){
  $("#edit-btn").click(function(){
    $("#hide-div").addClass("blue");
    $("#hide1").addClass("section1");
  });
});
$(document).ready(function(){
  $("#edit-btn2").click(function(){
    $("#hide-div2").addClass("blue");
    $("#hide2").addClass("section1");
  });
});
$(document).ready(function(){
  $("#edit-btn3").click(function(){
    $("#hide-div3").addClass("blue");
    $("#hide3").addClass("section1");
  });
});
$(document).ready(function(){
  $("#edit-btn4").click(function(){
    $("#hide-div4").addClass("blue");
    $("#hide4").addClass("section1");
  });
});
$(document).ready(function(){
  $("#edit-btn5").click(function(){
    $("#hide-div5").addClass("blue");
    $("#hide5").addClass("section1");
  });
});



function myfunc(){
   alert(abc);
   
}
</script>