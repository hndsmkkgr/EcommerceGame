<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="GameShop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link href="<?php echo base_url ('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">

</head>
<body style="max-width: 90%; margin:5%;">

<div class="super_container">

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Home -->

  <div class="container-fluid" style="margin-top: 300px">

  <div class="row"style="margin-right: 10px; margin-left: 2rem;">
    <?php foreach ($barang as $brg) : ?> 
     <div class="card" style="width: 18rem;">
      <div style="">
        <a href="<?= base_url()?>index.php/Platform/detil/<?= $brg->id_brg;?>"class="thumbnail"</a>  
        <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="" style="float:left; margin:0 8px 8px 0; max-height: 13rem;">
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->nama_brg; ?></small><br>
        <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga; ?></span><br>
         <?php echo anchor('Platform/tambah_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Kerangjang</div>') ?>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>



<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/greensock/TweenMax.min.js"></script>
<script src="assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="assets/js/product.js"></script>
</body>
</html>
