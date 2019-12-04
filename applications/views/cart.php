<div class="super_container" style="margin-top: 200px;">
	<div class="box mt-0 pb-0 no-horizontal-padding">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="1">Product</th>
                          <th>Quantity</th>
						  <th>Price</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
							foreach($this->cart->contents() as $items) : ?>                                           
						<tr>
                          <td><?php echo $items['name'] ?></a></td>
                          <td><?php echo $items['qty'] ?>
                          </td>
                          <td>Rp.<span class="harga"><?php echo $items['price'] ?> </span></td>
                          <td>Rp.<span class="total"><?php echo $items['subtotal'] ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3">Total</th>
                          <th colspan="2">Rp.<?php echo number_format($this->cart->total(), 0,',','.') ?></th>
                        </tr>
                      </tfoot>
                    </table>
                </div>
              </div>		

            <div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button" style="margin-left: 475px"><a href="<?php echo base_url();?>platform">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div class="button clear_cart_button" style="margin-right:475px"><a href="<?php echo base_url('cart/hapus_keranjang');?>">Clear cart</a></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row row_extra">
				<div class="col-lg-4">

					<!-- Coupon Code -->
					<div class="coupon" style="margin-left: 100px;">
						<div class="section_title">Coupon code</div>
						<div class="section_subtitle">Enter your coupon code</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Apply</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total" style="margin-right: 100px;">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto">Rp.<?php echo number_format($this->cart->total(), 0,',','.') ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto">Rp.<?php echo number_format($this->cart->total(), 0,',','.') ?></div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="<?php echo base_url();?>checkout">>Proceed to checkout</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>