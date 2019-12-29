<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Barang</h3>
	<?php foreach($barang as $brg) : ?>
		<form method="post" action="<?= base_url(). 'admin/data_barang/update' ?>">
			<div class="form-group">
				<input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg ?>">
			</div>
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
		</form>
	<?php endforeach; ?>
</div>