<div class="container fluid">
    <?= $this->session->flashdata('message'); ?>
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

	<table class="table table-bordered m-1">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1; 
		foreach($barang as $brg) : ?>

		<tr>
			<th><?= $no++ ?></th>
			<th><img src="<?= base_url().'/uploads/'.$brg->gambar ?>" width=50></th>
			<th><?= $brg->nama_brg ?></th>
			<th><?= $brg->keterangan ?></th>
			<th><?= $brg->kategori ?></th>
			<th><?= $brg->harga ?></th>
			<th><?= $brg->stok ?></th>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>
			<td><div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div></td>
		</tr>

		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      	<form action="<?= base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
      		<div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Nama Barang">
                    </div>
                   
                    <div class="form-group">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <div class="row">
                            	<div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
      	</form>

      </div>
    </div>
  </div>
</div>