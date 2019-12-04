<div class="super_container"style="margin-top: 150px;">

	

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?=base_url()?>/upload/<?= $tampil_detil->gambar;?>" alt=""><div class="product_extra"><a href="#"></a></div></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?= $tampil_detil->nama_brg;?></div>
						<div class="details_price">Rp. <?= $tampil_detil->harga;?></div>
						<br>
						<div class="details_price">Category : <?= $tampil_detil->kategori;?></div>
						<br>
						<div class="details_price">Available Stock : <?= $tampil_detil->stok;?></div>
						<br>
						<br>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<?php
							if($tampil_detil->stok > 0){
								echo '<span>Product Available</span>';
							}else{
								echo '<span>Product Not available</span>';
							}
							?>
						</div>

						<div class="details_text">
							<p><?= $tampil_detil->detil;?></p>
						</div>


						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
							<li><a href="https://pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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