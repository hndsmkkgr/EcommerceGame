<div class="container-fluid">
	<h4>Keranjang Belanjaan</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
		</tr>

		<?php 
			foreach($this->cart->contents() as $items) : ?>
				<tr>
					<td><?php echo $items['name'] ?></td>
					<td><?php echo $items['qty'] ?></td>
					<td>Rp. <?php echo $items['price'] ?></td>
					<td align="">Rp. <?php echo $items['subtotal'] ?></td>
				</tr>
			<?php endforeach; ?>
	</table>
	

</div>