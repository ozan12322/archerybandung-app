<div class="container-fluid">
	<h1>List Product</h1>
<!-- Content Row -->
          <div class="row">
            	<?php foreach($barang as $brg) : ?>
				<div class="col-md-3">
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
						    <h2 class="card-title"><?= $brg->nama_brg ?></h2>
						    <!-- Keterangan -->
						    <p class="card-text"><h6><?= $brg->keterangan ?></h6></p><p></p>
						    <!-- Harga -->
						    <h4>Rp.<?= number_format($brg->harga, 0,',','.'), ',' ?>00</h4>
						    <!-- Button -->
						    <div class="text-center">
						    <?= anchor('admin/data_barang/detail/' . $brg->id_brg, '<div class="btn btn-primary" title="Detail Product">Detail</div>') ?>
						    </div>
						  </div>

						</div>
				</div>
			<?php endforeach; ?>
            </div>
</div>