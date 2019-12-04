<div class="super_container"style="margin-top: 150px;">

	

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?=base_url()?>/upload/<?= $tampil_detil->gambar;?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?= $tampil_detil->nama_brg;?></div>
						<div class="details_price">Rp. <?= $tampil_detil->harga;?></div>
						<br>
						<div class="details_price">Categori : <?= $tampil_detil->kategori;?></div>
						<br>
						<div class="details_price">Stock Product : <?= $tampil_detil->stok;?></div>
						<br>
						<br>
						<?php
						if($tampil_detil->stok > 0){
							echo '<div class="">Product Available</div>';
						}else{
							echo '<div class="">Product Not available</div>';
						}
						?>
						
						<div class="details_text">
							<p><?= $tampil_detil->detil;?></p>
						</div>


						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
							<br>
							<br>
						<div>
							<?php echo anchor ('product/keranjang/'. $tampil_detil->id_brg, '<div class="btn btn-sm btn-primary">Add to Cart</div>') ?>
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
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

