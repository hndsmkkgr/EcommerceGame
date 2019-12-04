<div class="super_container">

	<!-- Home -->

	<div class="home" id="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/deathStrandingSlider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Death Stranding</div>
										<div class="home_slider_subtitle">Tomorrow is in your hands<br/>Out now, only on PS4!</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/fe3hSlider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Fire Emblem: Three Houses</div>
										<div class="home_slider_subtitle">Choose your houses!<br/>Out now, only on Nintendo Switch!</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/images/ff7rSlider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Final Fantasy VII Remake</div>
										<div class="home_slider_subtitle"> is an upcoming action role-playing game.<br/>
											It is the first part of a series of multiple releases.<br/>Preorders now open, only on PS4!</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(assets/images/pcGames.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="assets/images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>15<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Xbox Games</div>
						<div class="avds_link"><a href="<?php echo base_url();?>xbox">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(assets/images/switchGames.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Nintendo Switch Games</div>
						<div class="avds_text">Buy new games now.</div>
						<div class="avds_link avds_link_large"><a href="<?php echo base_url();?>nswitch">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->
	
	<div class="products">
	  <div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grid">  

            <?php foreach ($barang as $brg) : ?> 
            <div class="product">
                <div class="product_image"><img src="<?php echo base_url().'/upload/'.$brg->gambar?>" alt=""></div>
                <?php if($brg->id_brg == 0)
                {
                  echo '<div class="product_extra product_hot"><a href="#">Hot</a></div>';
                }
                elseif($brg->id_brg == 1)
                {
                  echo'<div class="product_extra product_new"><a href="categories.html">New</a></div>';
                }
                elseif($brg->id_brg == 2)
                {
                  echo '<div class="product_extra product_sale"><a href="categories.html">Sale</a></div>';
                }?>
                <div class="product_content">
                <div class="product_title"><a href="<?= base_url()?>detil/<?= $brg->id_brg;?>"><?php echo $brg->nama_brg ?></a></div>
                <div class="product_type"><?php echo $brg->kategori ?></a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(assets/images/offer.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Offers!</div>
							<div class="avds_text">Check it out!<br/>Only available until December 31, 2019.</div>
							<div class="avds_link avds_xl_link"><a href="<?php echo base_url();?>platform">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="assets/images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Get Updates</div>
						<div class="icon_box_text">
							<p>Subscribe to our newsletter to receive updates on new games and discounts.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="assets/images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Install from Codes</div>
						<div class="icon_box_text">
							<p>No need to wait for days nor pay additional shipping fees, you can install your game through the code we sent to your e-mail.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="assets/images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>Need help? Fret not! We're ready to help for 24/7, just send us a message!</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Please write your e-mail below</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200" onclick="popup_home()"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
