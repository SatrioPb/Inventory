<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Barang Masuk</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<!-- <th>Id Transaksi</th> -->
							<th>Kode Barang</th>
							<th>Tanggal Masuk</th>

							<th>Nama Barang</th>

							<th>Pengirim</th>




							<th>Jumlah Masuk</th>
							<th>Satuan Barang</th>
							<th>User</th>
							<th>Pengaturan</th>


						</tr>
					</thead>


					<tbody>
						<?php

						$no = 1;
						$sql = $koneksi->query("SELECT barang_masuk.*,users.nama FROM `barang_masuk` LEFT JOIN users ON barang_masuk.id_user=users.id");
						while ($data = $sql->fetch_assoc()) {

						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<!-- <td><?php echo $data['id_transaksi'] ?></td> -->
								<td><?php echo $data['kode_barang'] ?></td>
								<td><?php echo $data['tanggal'] ?></td>

								<td><?php echo $data['nama_barang'] ?></td>

								<td><?php echo $data['pengirim'] ?></td>


								<td><?php echo $data['jumlah'] ?></td>
								<td><?php echo $data['satuan'] ?></td>
								<td><?php echo $data['nama'] ?></td>



								<td>

									<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=barangmasuk&aksi=hapusbarangmasuk&id_transaksi=<?php echo $data['id_transaksi'] ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
				<a href="?page=barangmasuk&aksi=tambahbarangmasuk" class="btn" style="background-color: #A0512B;color:white;">Tambah</a>
				</tbody>
				</table>
			</div>
		</div>
	</div>

</div>