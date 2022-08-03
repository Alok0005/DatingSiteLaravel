  <link rel="stylesheet" href="frontend/css/style-new.css">


  <body>
      <!-- ==========Page Header Section Start Here========== -->
      <section class="page-header-section style-1" style="padding: 65px 0px 0px !important;">
          <div class="container">
    
			  <div class="page-header-content">
                  <div class="page-header-inner">
                      <div class="page-title">
                          <h2>All Suggestion Profile</h2>
                      </div>
                      <ol class="breadcrumb">
                          <li><a href="{{'/'}}">Home</a></li>
                          <li class="active">All Suggestion Profile</li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>
                       <div class="tab-pane fade active show">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-xl-12">
                                           
                                                  <div class="row gy-4 gx-3">   
												  <?php foreach($arrdata as $data){ ?>
												  <div class="col-lg-3 col-md-4 col-6">
                                                          <div class="lab-item member-item style-1">
                                                              <div class="lab-inner">
                                                                  <div class="lab-thumb">
                                                                      <img src="storage/profile/<?php echo $data->image; ?>" alt="member-img" style="height: 300px;">
                                                                  </div>
                                                                  <div class="lab-content"  style="display:flex;">
                                                                      <h6 style="width:135px;"><a href="#"><?php echo $data->name; ?></a> </h6>
                                                                     <div class="view-profile-page" style="background: #f15d22; padding: 5px 10px; border-radius: 5px;">
																<a href="all-suggestion-profile-details/<?php echo $data->id ?>">View Profile</a>
																</div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                     
												  <?php } ?>
                                                    
                                                  </div>
                                              
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          