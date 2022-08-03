<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Dating New Site</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{url('frontend/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/meanmenu.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="privine-responsive-nav">
            <div class="container">
                <div class="privine-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{url('frontend/images/logo.webp')}}" class="white-logo" alt="logo">
                            <img src="{{url('frontend/images/logo.webp')}}" class="black-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="privine-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{url('frontend/images/logo.webp')}}" class="white-logo" alt="logo">
                        <img src="{{url('frontend/images/logo.webp')}}" class="black-logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{'/'}}" class="nav-link">Home</a>                               
                            </li>      
                         @if(empty(Auth::user()->id))							
							<li class="nav-item">
                                <a href="#" class="nav-link">Our Features <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
								
                                    <li class="nav-item">
                                        <a href="{{'/allmember'}}" class="nav-link">All Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{'/login'}}" class="nav-link">Dashboard</a>
                                    </li>													
                                </ul>
                            </li>
							@else
									<li class="nav-item">
                                        <a href="{{'/home'}}" class="nav-link">Dashboard</a>
                                    </li>
									<li class="nav-item">
                                        <a href="{{'/all-suggestion-profile'}}" class="nav-link">Suggesed Profile</a>
                                    </li>
									
									<li class="nav-item">
                                <a href="{{'chatify'}}" class="nav-link">Chat</a>
                            </li> 
									
										@endif
                            <li class="nav-item">
                                <a href="{{'/contact'}}" class="nav-link">Contact</a>
                            </li>                            
                             
							
							
							 	<li class="nav-item">
                             
								@if(!empty(Auth::user()->id))
									                        
                             @else
                                     <a href="{{'/login'}}" class="nav-link">Log In</a>
                             @endif
                            </li>
                            @if(session()->has('qwick'))
							<li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                            </li>
                            @endif
							<div class="selected-seand " style="width:115px;">                     
					  <div class="nice-select selectpicker form-select " tabindex="0" style="background: #fc6113;color: #fff; border: 0px;">
					  <span class="current" style="color: #fff; font-size: 18px;">Language</span><ul class="list">
					  <li data-value="Hindi" class="option selected focus">Hindi</li>
					  <li data-value="English" class="option">English</li></ul>
					  </div>
                    </div>
					<div class="selected-seand " style="width:115px;">                   
					  <div class="nice-select selectpicker form-select" tabindex="0" style="background: #fc6113;color: #fff; border: 0px;">
					  <span class="current"style="color: #fff; font-size: 18px;">Country </span>
					  <ul class="list"><li data-value="India" class="option selected focus">India</li>
					  <li data-value="Australia" class="option">Australia</li></ul>
					  </div>
                    </div>
				
                        </ul>                      
                    </div>
					
                </nav>				
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->