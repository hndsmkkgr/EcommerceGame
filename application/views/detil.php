

<div class="super_container">

  <div class="col-md-4" style="margin-top: 200px;" />
    <div class ="thumbnail" >
      <img src="<?=base_url()?>/upload/<?= $tampil_detil->gambar;?>" style="width: 15%; margin-left: 15px; float:left;  ">
    </div>
  </div>

  <div class = "col-md-8" style="width: 70%; margin-left: 10px;">
    <table class ="table table-hover table-striped" >
      <tr>
        <td>Judul Game :</td> <br> <br> <td> <?= $tampil_detil->nama_brg;?></td> 
      </tr>
      <tr>
        <td>Deskripsi :</td> <br> <td><?= $tampil_detil->detil;?></td>
      </tr>
    </table>
  </div>
</div>


      