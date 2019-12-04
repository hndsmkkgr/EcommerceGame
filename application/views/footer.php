<!-- Footer -->

<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(assets/images/Footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">GameShop</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="https://pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </footer>

<script src="<?php base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php base_url();?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?php base_url();?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php base_url();?>assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php base_url();?>assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php base_url();?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php base_url();?>assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php base_url();?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php base_url();?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php base_url();?>assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php base_url();?>assets/plugins/easing/easing.js"></script>
<script src="<?php base_url();?>assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php base_url();?>assets/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?php base_url();?>assets/js/contact.js"></script>

<!-- subscribe -->
<script>
	function popup_home()
	{
		alert("Thank you for subscribing to our newsletter!");
	}
</script>

<!-- kirim message -->
<script>
	function popup_contact() 
	{
  		alert("Thanks for contacting us, we'll reply shortly :D");
	}
</script>

<!-- /* Get the modal */ -->

<script>
	var modalSignup = document.getElementById('signup');
	var modalLogin = document.getElementById('login');
	window.onclick = function(event) 
	{
		if (event.target == modalSignup || event.target == modalLogin) 
		{
    	modalSignup.style.display = "none";
    	modalLogin.style.display = "none";
  		}
	}
/* When the user clicks anywhere outside of the modal, close it */
</script>

<script type="text/JavaScript">
	
	function grayer(formId, yesNo) 
	{
  		var f = document.getElementById(formId);
   		for(var i=0; i<f.length; i++) f[i].disabled = yesNo;
	
		window.onload=function(){grayer('personal_form',true);}; // disabled by default
	}
</script>

<script type="text/JavaScript">

/* Edit and Save Profile*/

function grayerProfile(profile_form, yesNo) 
{
	  var f = document.getElementById(profile_form);
	   for(var i=0; i<f.length; i++) f[i].disabled = yesNo;

	window.onload=function(){grayerProfile('profile_form',true);}; // disabled by default
}

/* Edit and Save */

function grayer(personal_form, yesNo) 
{
	  var f = document.getElementById(personal_form);
	   for(var i=0; i<f.length; i++) f[i].disabled = yesNo;

	window.onload=function(){grayer('personal_form',true);}; // disabled by default
}

/* Edit and Save Password*/

function grayer(security_form, yesNo) 
{
	  var f = document.getElementById(security_form);
	   for(var i=0; i<f.length; i++) f[i].disabled = yesNo;

	window.onload=function(){grayer('security_form',true);}; // disabled by default
}

/*-----------------------------------------------------------------------------------------------*/

/* Display Profile Button */

function changeVisibilityProfile() {
	  document.getElementById("profile_save").style.display = "none";
}

function changeVisibilityProfile2() {
	document.getElementById("profile_save").style.display = "block";
}

/* Display Security Settings Button */

	function changeVisibilityPassword() {
	  document.getElementById("security_save").style.display = "none";
}

function changeVisibilityPassword2() {
	document.getElementById("security_save").style.display = "block";
}


/* Display Button */

function changeVisibility() {
	  document.getElementById("save").style.display = "none";
}

function changeVisibility2() {
	document.getElementById("save").style.display = "block";
}

/* Display Security Settings */

function changeVisibilitySecurity() {
	  document.getElementById("security").style.display = "none";
}

function changeVisibilitySecurity2() {
	document.getElementById("security").style.display = "block";
}

/* Display Security Personal Information */

function changeVisibilityPersonal() {
	  document.getElementById("personal_information").style.display = "none";
}

function changeVisibilityPersonal2() {
	document.getElementById("personal_information").style.display = "block";
}

/*-----------------------------------------------------------------------------------------------*/

</script>
</div>

<!-- <script src="<?php echo base_url('assets/js/checkout.js')?>" type="text/JavaScript"></script> -->


</body>
</html>