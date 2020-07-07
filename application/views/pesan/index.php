<div id="content">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
  <!-- Topbar -->

  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div>
      <h5 class="text-center mt-3 mb-3"><?= $judul; ?> </h5>
    
    </div>
    <?=$total_pesan?>
    <table id="table" class="table table-hover table-striped">

      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">pesan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>

      <tbody>



      <?php $start = 1; ?>
        <?php

        foreach ($pesan as $p) :   ?>

          <tr>


            </th>
            <td><?= $start; ?></td>
            <td><?= $p["nama"]; ?></td>
            <td><?= $p["email"]; ?></td>
            <td><?= $p["isi_pesan"]; ?></td>



            <td>
              <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick="return confirm('apakah data akan dihapus?');"  href="<?= base_url(); ?>pesan/hapus/<?= $p['id']; ?>">
                <i class="fas fa-trash fa"></i>
              </a>

              <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>pesan/detail/<?= $p['id']; ?>">
                <i class="fas fa-eye fa"></i>
              </a>




            </td>

          </tr>


        <?php endforeach; ?>
      </tbody>
    </table>
    <?php if (empty($pesan)) : ?>
      <div class="alert alert-danger" role="alert">
        <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

      <?php endif; ?>







      </div>
      <!-- /.container-fluid -->

  </div>