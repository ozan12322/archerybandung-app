<br><br><br><br><br><br><br>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<?php foreach($busur as $brg) : ?>
			<hr>
			<h1 class="text-center">List <?= $brg->kategori ?></h1>
			<hr>
      		<div class="row">
				<div class="col-md-4">
						<!-- Card -->
						<div class="card">

						  <!-- Card image -->
						  <div class="view overlay">
						    <img class="card-img-top" src="<?= base_url().'/uploads/'.$brg->gambar ?>" alt="Card image cap">
						    <a href="#!">
						      <div class="mask rgba-white-slight"></div>
						    </a>
						  </div>

						  <!-- Card content -->
						  <div class="card-body">

						    <!-- Nama Barang -->
						    <h2 class="card-title"><a href="#!"><?= $brg->nama_brg ?></a></h2>
						    <!-- Keterangan -->
						    <p class="card-text"><h6>Kategori : <a href=""><?= $brg->kategori ?></a></h6></p><p></p>
						    <!-- Harga -->
						    <h4>Rp.<?= number_format($brg->harga, 0,',','.'), ',' ?>00</h4>
						    <!-- Button -->
						    <div class="text-center">
						    <?= anchor('Toko/detail/' . $brg->id_brg, '<div class="btn btn-primary" title="Detail Product">Detail</div>') ?>
						    
						    <?= anchor('Toko/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success" title="Add to Cart">Add to Cart</div>') ?>
						    </div>
						  </div>

						</div>
				</div>
			<?php endforeach; ?>
			</div>		
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	</div>

