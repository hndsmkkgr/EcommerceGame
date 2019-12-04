

<div class="home" style="margin-top: 50px">
  <div class="home_container">
    <div class="home_background" style="background-image:url(assets/images/platform.jpg)"></div>
    <div class="home_content_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="home_content">
              <div class="home_title">Find Your Game<span>.</span></div>
              <div class="home_text"><p>Get just the right game to satisfy your boredom.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="super_container">

	<div class="products">
	  <div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grid">  

            <?php foreach ($barang as $brg) : ?> 
            <div class="product">
            <a href="<?= base_url()?>Product/index/<?= $brg->id_brg;?>"><div class="product_image"><img src="<?php echo base_url().'/upload/'.$brg->gambar?>" alt=""></div></a>
            <?php if($brg->id_brg == 4)
                {
                  echo '<div class="product_extra product_hot"><a href="#">Hot</a></div>';
                }
                ?>
                <div class="product_content">
                <div class="product_title"><a href="<?= base_url()?>Product/index/<?= $brg->id_brg;?>"><?php echo $brg->nama_brg ?></a></div>
                <div class="product_type"><?php echo $brg->kategori ?></a></div>
                <div class="product_price">Rp. <?php echo $brg->harga; ?></div>
                <br/>
                <?php echo anchor ('platform/keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Add to Cart</div>') ?>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

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
  <br/>