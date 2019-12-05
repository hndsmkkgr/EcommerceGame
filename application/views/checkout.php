<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(assets/images/cart_head.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="<?php echo base_url();?>welcome">Home</a></li>
										<li><a href="<?php echo base_url();?>cart">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout" style="margin-left: 20%;">
		<div class="container">
			<div class="row">

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>

							<ul class="order_list">
							<?php foreach($this->cart->contents() as $items) : ?>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<tr>
										<td><div class="order_list_title"><?php echo $items['name'] ?></div></td>
										<td><div class="order_list_title">(<?php echo $items['qty'] ?>)</div></td>
										</tr>
									<div class="order_list_value ml-auto">Rp<span class="harga"><?php echo $items['subtotal'] ?></div>	
								</li>
								<?php endforeach; ?>
								

								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Via Email (Free)</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto">Rp.<?php echo number_format($this->cart->total(), 0,',','.') ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Payment Method: </div>
									<div class="order_list_value ml-auto"></div>
								</li>

							</ul>
						</div>
						

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<label class="payment_option clearfix">Paypal
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Credit card
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Direct bank transfer
									<input type="radio" checked="checked" name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">Finish the order by clicking the button below!</div>
						<div class="button order_button" onclick="myFunction()"><a href="<?php echo base_url('checkout/hapus_keranjang');?>">Place Order</a></div>
					</div>
				</div>
			</div>
		</div>

<script>
function myFunction() {
	Swal.fire('Order Success!<br/>Thank you for purchasing!'); 
}
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>