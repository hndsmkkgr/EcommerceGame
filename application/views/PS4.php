<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>

</head>
<body>

<div class="super_container">

  

  <!-- Home -->

<div class="container-fluid" style="margin-top: 300px">

  <div class="row"style="margin-right: 10px; margin-left: 2rem;">
    <?php foreach ($barang as $brg) : ?> 
     <div class="card" style="width: 18rem;">
      <a href="<?= base_url()?>Platform/detil/<?= $brg->id_brg;?>"class="thumbnail"</a>
      <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->nama_brg; ?></small><br>
        <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga; ?></span><br>
        <a href="#" class="btn btn-sm btn-primary">Tambah ke Kerangjang</a>
      </div>
    </div>
  <?php endforeach; ?>
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

   
</body>
</html>
