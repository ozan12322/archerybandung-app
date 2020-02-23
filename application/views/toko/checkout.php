

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title"><h1>Check Out</h1></div>

						<div class="btn btn-sm btn-success" hidden>
							<?php 
								$grand_total = 0;
								if($keranjang = $this->cart->contents()){
									foreach ($keranjang as $i){
										$grand_total = $grand_total + $i['subtotal'];
									}
									echo "Rp. ".number_format($grand_total,0,',','.');
								
							?>
						</div>

						<div class="section_subtitle">Enter your address info</div><br>
						<div class="checkout_form_container">
							<form method="post" action="<?= base_url('Toko/') ?>proses_checkout" id="checkout_form" class="checkout_form">
								<div>
									<!-- Name -->
									<label for="checkout_name">Full Name*</label>
									<input type="text" name="full_name" id="checkout_name" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Address -->
									<label for="checkout_address">Address*</label>
									<input type="text" name="address" id="checkout_address" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Phone no -->
									<label for="checkout_phone">Phone no*</label>
									<input type="text" name="no_telp" id="checkout_phone" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Email Address*</label>
									<input type="email" name="email" id="checkout_email" class="checkout_input" required="required" value="<?= $user['email']; ?>" readonly>
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_payment">Payment*</label>
									<select name="bank" id="checkout_payment" class="checkout_input" required="required">
										<option>-</option>
										<option>BCA - XXXX</option>
										<option>BNI -XXXXXX</option>
										<option>BRI- XXXXXXXXXX</option>
									</select>
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_shiping">Shiping*</label>
									<select name="pengiriman" id="checkout_shiping" class="checkout_input" required="required">
											<option>-</option>
											<option>JNE</option>
											<option>TIKI</option>
											<option>POS INDONESIA</option>
											<option>GOJEK</option>
											<option>GRAB</option>
									</select>
								</div>
								
							<br>
							<center><button type="submit" class="btn btn-primary" title="Order Now">Order</button></center>
							</form>

							<?php 
								}else{
									echo "";
								}
							 ?>

						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<ul class="order_list">
								<table class="table table-hover">
						          <thead>
						            <tr>
						              <th>#</th>
						              <th>Product Name</th>
						              <th>Qty</th>
						              <th>Price</th>
						              <th>Sub-Total</th>
						            </tr>
						          </thead>
						          <tbody>
						            <?php $no=1; ?>
						            <?php foreach($this->cart->contents() as $i) : ?>
						            <tr>
						              <td scope="row"><?= $no++; ?></td>
						              <td><?= $i['name'] ?></td>
						              <td align="center"><?= $i['qty'] ?></td>
						              <td align="right">Rp.<?= number_format($i['price'], 0,',','.') ?></td>
						              <td align="right">Rp.<?= number_format($i['subtotal'], 0,',','.') ?></td>
						            </tr>

						            <?php endforeach; ?>
						          </tbody>
						        </table>
							</ul>
						</div>
						<hr>
						<div class="order_list_container">
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<div class="order_list_value ml-auto">
										<div class="btn btn-sm btn-success">
											<?php 
												$grand_total = 0;
												if($keranjang = $this->cart->contents()){
													foreach ($keranjang as $i){
														$grand_total = $grand_total + $i['subtotal'];
													}
													echo "Rp. ".number_format($grand_total,0,',','.');
												}
											 ?>
										</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Harga tersebut belum termasuk Ongkos Kirim!</div>
									<div class="order_list_value ml-auto">
										
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>