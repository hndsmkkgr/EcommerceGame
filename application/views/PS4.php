
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

  <!-- Home -->
<div class="super_container">

<div class="container-fluid" style="margin-top: 20px">

  <div class="row"style="margin-right: 10px; margin-left: 7rem;">
    <?php foreach ($barang as $brg) : ?> 
     <div class="card" style="width: 18rem; margin-right: 25px; margin-bottom: 25px;">
      <a href="<?= base_url()?>detil/<?= $brg->id_brg;?>"class="thumbnail">
      <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="" style ="float:left;  max-height: 13rem;">
      </a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->nama_brg; ?></small><br>
        <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga; ?></span><br>
         <?php echo anchor ('PS4/keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
      </div>
    </div>
  <?php endforeach; ?>
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
                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

