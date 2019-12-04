<!DOCTYPE html>
<html lang="en">
<head>
	<title>GameShop</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/checkout_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/product_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/categories.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/product.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/contact.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/signupLogin.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/header.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/styles/responsive.css">
</head>
<body>
	<div class="super_container">    

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="<?php echo base_url();?>welcome">GameShop</a></div>
							<nav class="main_nav">
								<ul>
									<li>
										<a href="<?php echo base_url();?>welcome">Home</a>
									</li>
									<li class="hassubs">
										<a href="<?php echo base_url();?>platform">Platforms</a>
										<ul>
											<li><a href="<?php echo base_url();?>ps4">PS4</a></li>
											<li><a href="<?php echo base_url();?>n3ds">3DS</a></li>
											<li><a href="<?php echo base_url();?>nswitch">SWITCH</a></li>
											<li><a href="<?php echo base_url();?>xbox">XBOX</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Account</a>
										<ul>
											<li><a><button onclick="document.getElementById('signup').style.display='block'" style="width:auto;">Sign Up</button></a></li>
											<li><a><button onclick="document.getElementById('login').style.display='block'" style="width:auto;">Log In</button></a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url();?>contact">Contact</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="search">
									<div class="search_icon">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
										 xml:space="preserve">
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="<?php echo base_url();?>welcome">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>platform">Platform<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="">Account<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>contact">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="<?php echo base_url();?>platform">Platform<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>ps4">PS4<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>n3ds">3DS<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>nswitch">SWITCH<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>xbox">XBOX<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="">Account<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a><button onclick="document.getElementById('signup').style.display='block'" style="width:auto;">Sign Up</button><i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a><button onclick="document.getElementById('log in').style.display='block'" style="width:auto;">Log In</button><i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="<?php echo base_url();?>contact">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>

	<!-- signup -->

<div id="signup" class="modal">
	<span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
  	<form class="modal-content" action="<?= base_url('register/registerUser') ?>" method="POST">
    <div class="container">
      	<h1>Sign Up</h1>
      	<p>Please fill in this form to create an account.</p>
      	<hr>
      	<label for="name"><b>Full Name</b></label>
		<input type="text" placeholder="Enter your fullname" name="name" required>
		
		<label for="email"><b>Email</b></label>
      	<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

		<div class="clearfix">
			<button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Sign Up</button>
		</div>
	</div>
  	</form>
</div>

<div id="login" class="modal">
	<span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
  	<form class="modal-content" action="login/loginUser" method = "POST">
    <div class="container">
      	<h1>Login</h1>
      	<hr>
      	<label for="email"><b>Email</b></label>
      	<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>


		<div class="clearfix">
			<button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="loginbtn">Log In</button>
		</div>
	</div>
  	</form>
</div>
