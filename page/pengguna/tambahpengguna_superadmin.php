  <div class="container-fluid">

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
  			<h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">


  				<div class="body">

  					<form method="POST" enctype="multipart/form-data">

  						<!-- <label for="">NIK</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="nik" class="form-control" />	 
							</div>
                            </div> -->



  						<label for="">Nama</label>
  						<div class="form-group">
  							<div class="form-line">
  								<input type="text" name="nama" class="form-control" />
  							</div>
  						</div>




  						<label for="">Telepon</label>
  						<div class="form-group">
  							<div class="form-line">
  								<input type="text" name="telepon" class="form-control" />
  							</div>
  						</div>


  						<label for="">Username</label>
  						<div class="form-group">
  							<div class="form-line">
  								<input type="text" name="username" class="form-control" />

  							</div>
  						</div>

  						<label for="">Password</label>
  						<div class="form-group">
  							<div class="form-line">
  								<input type="password" name="password" class="form-control" />


  							</div>
  						</div>

  						<label for="">Level</label>
  						<div class="form-group">
  							<div class="form-line">
  								<select name="level" class="form-control show-tick">
  									<option value="">-- Pilih Level --</option>
  									<!-- <option value="superadmin">Super Admin</option> -->
  									<option value="admin">Admin</option>
  									<option value="petugas">Petugas</option>

  								</select>
  							</div>
  						</div>
  				</div>



  				<input type="submit" name="simpan" value="Simpan" class="btn" style="background-color: #A0512B;color:white;">

  				</form>



  				<?php

					if (isset($_POST['simpan'])) {
						$nama = $_POST['nama'];
						$telepon = $_POST['telepon'];
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$level = $_POST['level'];



						$sql = $koneksi->query("insert into users (nama, telepon, username, password, level) values('$nama', '$telepon', '$username','$password','$level')");

						if ($sql) {
					?>

  						<script type="text/javascript">
  							alert("Data Berhasil Disimpan");
  							window.location.href = "?page=pengguna";
  						</script>

  				<?php
						}
					}
					?>