<div class="container-fluid">
	<h4>Invoice Pemesanan Product</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>No Telp Pemesan</th>
			<th>Email Pemesan</th>
			<th>Bank</th>
			<th>Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>

		<?php foreach($invoice as $inv) : ?>

		<tr>
			<td><?= $inv->id ?></td>
			<td><?= $inv->nama ?></td>
			<td><?= $inv->alamat ?></td>
			<td><?= $inv->no_telp ?></td>
			<td><?= $inv->email ?></td>
			<td><?= $inv->bank ?></td>
			<td><?= $inv->pengiriman ?></td>
			<td><?= $inv->tgl_pesan ?></td>
			<td><?= $inv->batas_bayar ?></td>
			<td><?= anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>

		<?php endforeach; ?>

	</table>
</div>