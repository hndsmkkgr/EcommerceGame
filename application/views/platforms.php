
  <div class="super_container">

  <!-- Header -->
  

  <!-- Home -->

  <div class="container-fluid" style="margin-top: 300px">

  <div class="row"style="margin-right: 10px; margin-left: 2rem;">
    <?php foreach ($barang as $brg) : ?> 
     <div class="card" style="width: 18rem;">
      <div style=""> 
        <a href="<?= base_url()?>Platform/detil/<?= $brg->id_brg;?>">
          <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="" style="float:left; margin:0 8px 8px 0; max-height: 13rem;">
        </a>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->nama_brg; ?></small><br>
        <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga; ?></span><br>
         <?php echo anchor('platform/keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>




 
