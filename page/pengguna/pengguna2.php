<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>NIK</th> -->
              <th>Username</th>

              <th>Telepon</th>

              <!-- <th>Password</th> -->
              <th>Level</th>
              <!-- <th>Edit</th> -->


            </tr>
          </thead>


          <tbody>
            <?php

            $no = 1;
            $sql = $koneksi->query("select *from users WHERE level='petugas'");
            while ($data = $sql->fetch_assoc()) {

            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <!-- <td><?php echo $data['nik'] ?></td> -->
                <td><?php echo $data['nama'] ?></td>

                <td><?php echo $data['telepon'] ?></td>
                <!--td><?php echo $data['username'] ?></td>

                <!-- <td><?php echo $data['password'] ?></td> -->
                <td><?php echo $data['level'] ?></td>
                <!-- <td><img src="img/<?php echo $data['foto'] ?>" width="50" height="50" alt=""> </td> -->

              </tr>
            <?php } ?>

          </tbody>
        </table>
        <a href="?page=pengguna&aksi=tambahpengguna2" class="btn" style="background-color: #A0512B;color:white;">Tambah</a>
        </tbody>
        </table>
      </div>
    </div>
  </div>

</div>