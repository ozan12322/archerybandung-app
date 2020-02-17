
	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">
				<?php foreach($barang as $brg) : ?>
				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?= base_url().'/uploads/'.$brg->gambar ?>" alt=""></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?= $brg->nama_brg ?></div>
						<div class="details_price">Rp. <?= number_format($brg->harga, 0,',','.'), ',' ?>00</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability :</div>
							<span><?= $brg->stok ?></span>
						</div>
						<div class="details_text">
							<p><?= $brg->keterangan ?></p>
						</div>

					<?php endforeach; ?>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							
							<?= anchor('Toko/index/', '<div class="btn btn-danger" title="Back to Index">Back</div>') ?>

							<?= anchor('Toko/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success" title="Add to Cart">Add to Cart</div>') ?>
						</div>

						<div class="product_quantity_container">
							Atau bisa juga lewat :
							<a href="">Shopee</a>
							<a href="">Bukalapak</a>
							<a href="">Tokopedia</a>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
