<link rel="stylesheet" href="frontend/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start Navbar Area -->
    <div class="grid" style="padding: 77px 0px 0px;">
  <div class="header">
  <div class="col-lg-6" style="display:flex; justify-content: center;">
    <div class="overviewCard-icon overviewCard-icon--document">
           <a href="#"><img src="frontend/images/bolt.png"/></a>
        </div>
		<div class="overviewCard-icon overviewCard-icon--calendar">
          <a href="#"><img src="frontend/images/filled.png"/></a></a>
        </div>
		<div class="overviewCard-icon overviewCard-icon--mail">
           <a href="#"><img src="frontend/images/message.png"/></a></a>
        </div>
		<div class="overviewCard-icon overviewCard-icon--mail">
           <a href="#"><img src="frontend/images/notification.png"/></a></a>
        </div>
		</div>
		<div class="col-lg-6">
    <div class="header__avatar">
      <div class="dropdown">
        <ul class="dropdown__list">
          <li class="dropdown__list-item">
            <a href="{{'/profile'}}" ><span class="dropdown__icon"><i class="far fa-user"></i></span>
            <span class="dropdown__title">my profile</span></a>
          </li>
          <li class="dropdown__list-item">
            <span class="dropdown__icon"><i class="fas fa-clipboard-list"></i></span>
            <span class="dropdown__title">my account</span>
          </li>
          <li class="dropdown__list-item">
		  <a class="nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
                                        <span class="dropdown__title">log out</span>
                                    </a>
									 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
            
          </li>
        </ul>
      </div>
    </div>
	</div>
  </div>

  <aside class="sidenav">
    <div class="sidenav__brand">
      <i class="fas fa-feather-alt sidenav__brand-icon"></i>
      <a class="sidenav__brand-link" href="#">Webtrills</a>
      <i class="fas fa-times sidenav__brand-close"></i>
    </div>
   
    <div class="row row--align-v-center row--align-h-center">
      <ul class="navList">     
          <li>
          <div class="navList__subheading row row--align-v-center">
            <span class="navList__subheading-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
            <span class="navList__subheading-title">Search</span>
          </div>
          
        </li>
        <li>
        <a href="{{'chatify'}}" class="navList__subheading row row--align-v-center">Messages</a>
          <!-- <div class="navList__subheading row row--align-v-center">
            <span class="navList__subheading-icon"><i class="fas fa-plane-departure"></i></span>
            <span class="navList__subheading-title">Connection</span>
          </div>
          <ul class="subList subList--hidden">
            <li class="subList__item">domestic</li>
            <li class="subList__item">foreign</li>
            <li class="subList__item">misc</li>
          </ul> -->
        </li>
        <li>
        <a href="{{'/setting'}}" class="navList__subheading row row--align-v-center">Setting</a>
          <!-- <div class="navList__subheading row row--align-v-center">
            <span class="navList__subheading-icon"><i class="far fa-angry"></i></span>
            <span class="navList__subheading-title">Setting</span>
          </div>
          <ul class="subList subList--hidden">
            <li class="subList__item">current</li>
            <li class="subList__item">archives</li>
          </ul> -->
        </li>
      </ul>
    </div>
  </aside>

  <main class="main">
   
	<div class="content">
  <div class="gallery js-gallery">
  <?php  foreach($arrdata as $data){ ?>
    <div class="gallery-item">
      <div class="gallery-img-holder js-gallery-popup">
        <img src="storage/profile/<?php echo $data->profile_img; ?>" alt="" class="gallery-img">
		<div class="user-information">
		<div class="user-content">
	  <h6><?php echo $data->name; ?></h6>
	  <span><?php echo $data->address; ?></span>
	  <ul>
	  <li><i class="fa fa-male" aria-hidden="true"></i><?php echo $data->height; ?></li>
	  <li><i class="fa fa-male" aria-hidden="true"></i><?php echo $data->body_type; ?></li>
	  <li><i class="fa fa-times" aria-hidden="true"></i><?php echo $data->smoking; ?></li>
	  <!--<li><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo $data->marital_status; ?></li>-->
	  <li><i class="fa fa-heart-o" aria-hidden="true"></i><?php echo $data->marital_status; ?></li>
	  <li><i class="fa fa-search" aria-hidden="true"></i><?php echo $data->looking_for; ?></li>
	  </ul>
	  </div>
	  
	  </div>
      </div>
	  
    </div>
    
    <?php } ?>
	 
  </div>
 <div class="dashboard-social-icon">
  <ul>
  <li> <a href="#"><i class="fa fa-frown-o" aria-hidden="true" style="background: #ffed52; color:#fff;"></i></a></li>
  <li> <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
  
  </ul>
  
  </div>
  <div class="row">
  <div class="col-lg-10">
  <div class="search-bar">
  <form class="search-bar-new" action="#" style="margin:auto;max-width:100%">
  <input type="text" placeholder="Write her a massage.." name="search2">
  <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
</form>

  </div>
  </div>
  <div class="col-lg-2">
  <button class="gift-icon"><i class="fa fa-gift" aria-hidden="true"></i></button>
  </div>
  </div>
</div>
	
  </main>
</div>
  
    
