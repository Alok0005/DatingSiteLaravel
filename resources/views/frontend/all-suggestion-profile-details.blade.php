  <link rel="stylesheet" href="../frontend/css/style-new.css">


  <body>
      <!-- ==========Page Header Section Start Here========== -->
      <section class="page-header-section style-1" style="padding: 65px 0px 0px !important;">
          <div class="container">
    
			  <div class="page-header-content">
                  <div class="page-header-inner">
                      <div class="page-title">
                          <h2>All Suggestion Profile Details</h2>
                      </div>
                      <ol class="breadcrumb">
                          <li><a href="{{'/'}}">Home</a></li>
                          <li class="active">All Suggestion Profile Details</li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>
    <!-- ==========Page Header Section Ends Here========== -->
    <!-- ==========Profile Section Start Here========== -->
    <section class="profile-section padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="member-profile">
                    <div class="profile-item">
                        <div class="profile-cover">
                            <?php if(empty($arrdatadetails->cover_img)){ ?>
								<img src="../frontend/images/profile/cover.jpg" alt="DP">
							<?php }else{ ?>
                                <img src="../storage/profile/<?php echo $arrdatadetails->cover_img ?>" alt="DP">
							<?php }?>
                           
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
							<?php if(empty($arrdatadetails->profile_img)){ ?>
								<img src="../storage/profile/<?php echo $arrdatadetail->image ?>" alt="DP">
							<?php }else{ ?>
                                <img src="../storage/profile/<?php echo $arrdatadetails->profile_img ?>" alt="DP">
							<?php }?>
							   
                            </div>
                            <div class="profile-name">
							<?php if(empty($arrdatadetails->name)){ ?>
                                <h4><?php echo $arrdatadetail->name ?></h4>
							<?php }else{ ?>
								<h4><?php echo $arrdatadetails->name ?></h4>
							<?php }?>
                                <p><?php echo $arrdatadetail->last_login_at ?></p>
                            </div>
                            

                        </div>
                    </div>
                    <div class="profile-item d-none">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <a href="#"><img src="images/profile/Profile.jpg" alt="profile"></a>
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
                                <button class="nav-link active" id="nav-ativity-tab" data-bs-toggle="tab"
                                    data-bs-target="#activity" type="button" role="tab" aria-controls="activity"
                                    aria-selected="true">Profile</button>
                               <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">massage</button>
                                <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab"
                                    data-bs-target="#friends" type="button" role="tab" aria-controls="friends"
                                    aria-selected="false">Friends <span class="item-number">16</span></button>
                                
                                <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab"
                                    data-bs-target="#photos" type="button" role="tab" aria-controls="photos"
                                    aria-selected="false">Photos</button>
                                
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Activity</a></li>
                                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                                        <li><a class="dropdown-item" href="#">Block user</a></li>
                                    </ul>
                                </div>-->

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- Activity tab -->
                            <div class="tab-pane activity-page fade show active" id="activity" role="tabpanel">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <article>
											 <div class="info-card-title">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Base Info</h6>
                                                    </div>													
														 </div>
													</div>
                                                <div class="info-card mb-20">
                                                   
													<div class="info-card-content" id="hide1">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Name</p>
																<?php if(empty($arrdatadetails->name)){ ?>
																	<p><?php echo $arrdatadetail->name ?></p>
																<?php }else{ ?>
																	<p><?php echo $arrdatadetails->name ?></p>
																<?php }?>
                                                              
                                                            </li>
                                                            <li>
                                                                <p class="info-name">I'm a</p>                                            
                                                                  <?php if(empty($arrdatadetails->gender)){ ?>
																	<p><?php echo $arrdatadetail->gender ?></p>
																<?php }else{ ?>
																	<p><?php echo $arrdatadetails->gender ?></p>
																<?php }?>                                     
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Loking for a</p>
                                                                
                                                                  <p><?php echo $arrdatadetails->looking_for ?? '' ?></p>
                                                                  
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Marital Status</p>
                                                           
                                                                  <p><?php echo $arrdatadetails->marital_status ?? '' ?></p>
                                                               
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Age</p>
                                                               <p><?php echo $arrdatadetails->age ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Date of Birth</p>
                                                               <p><?php echo $arrdatadetails->dob ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Address</p>
                                                               <p><?php echo $arrdatadetails->address ?? '' ?></p>
                                                            </li>
															
                                                        </ul>
                                                      
                                                    </div>
													
                                                </div>
												
                                                
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Lifestyle</h6>
                                                    </div>
													
														 </div>
													</div>
                                                    <div class="info-card-content" id="hide4">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Interest</p>                                                               
																		 <p><?php echo $arrdatadetails->interest ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Favorite vocations spot</p>                                                              
																		 <p><?php echo $arrdatadetails->favorite_spot ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Looking for</p>                                                  															
																		 <p><?php echo $arrdatadetails->looking ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Smoking</p>
                                                               
																<p><?php echo $arrdatadetails->smoking ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Language</p>                                                       
																<p><?php echo $arrdatadetails->language ?? '' ?></p>
                                                            </li>
                                                        </ul>
                                                          
                                                    </div>
													
                                                </div>
                                                <div class="info-card">
                                                    <div class="info-card-title">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Physical info</h6>
                                                    </div>
													
														 </div>
													</div>
													<div class="info-card-content" id="hide5">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Height</p>                                                          
																<p><?php echo $arrdatadetails->height ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Weight</p>                                          
																<p><?php echo $arrdatadetails->	weight ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Hair Color</p>
																<p><?php echo $arrdatadetails->hair_color ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Eye Color</p>
                                                                <p><?php echo $arrdatadetails->eye_color ?? '' ?></p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Body Type</p>
                                                                
																<p><?php echo $arrdatadetails->body_type ?? '' ?></p>
                                                            </li>
                                                            
                                                        </ul>

                                                    </div>
													
                                                </div>
												<div class="info-card-title">
													<div class="row">
													<div class="col-md-10">
                                                        <h6>Myself Summary</h6>
                                                    </div>
													
														 </div>
													</div>
                                                     <div class="info-card mb-20">                                                  
                                                    <div class="info-card-content" id="hide2" style="height: 200px;">
                                                        <p><?php echo $arrdatadetails->summary ?? '' ?></p>
                                                           
                                                    </div>													
                                                </div>		 
                                                
                                            </article>
                                        </div>

                                        
                                    </div>
                                </div>
							</div>

                            <!-- Profile tab 
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-12">
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
												<div class="info-card mb-20 blue" id="hide-di">                                             
                                                    <div class="info-card-content">
                                                        <textarea class="form-control form-new" placeholder="Myself Summary" rows="10" style="width:90%;"></textarea>
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
							</div>-->

                           
                            <!-- Frinds Tab
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
                                                                    <img src="images/member/01.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/02.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/03.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/04.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/05.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/06.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/07.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/08.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/09.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/10.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/11.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/12.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/13.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/14.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/15.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/16.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/17.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/18.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/19.jpg"
                                                                        alt="member-img">
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
                                                                    <img src="images/member/20.jpg"
                                                                        alt="member-img">
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
                            </div>-->
                            <!-- Group Tab -->
                            
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
 <link rel="stylesheet" href="frontend/css/style-new.css">