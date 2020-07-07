<div id="content">

    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <h5 class="text-center mt-3 mb-3"><?=$judul;?></h5>
    </div>
    <a class="btn btn-primary m-3" href="<?= base_url()?>tim/tambah"> <i class="fas fa-user"></i> Tambah</a>
    <table id="table" class="table table-hover table-striped" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Poisi</th>
            <th scope="col">No Hp</th>
            <th scope="col">FB</th>
            <th scope="col">IG</th>
            <th scope="col">Twitter</th>
            <th scope="col">Foto</th>
             <th scope="col">Aksi</th>
          </tr>
        </thead>
    
        <tbody>


      
          <?php
         
          foreach ($tim as $t) :   ?>
          <?php $start=1;?>
         
            <tr>
             
            </th>
              <td><?= $start; ?></td>
              <td><?= $t["nama"]; ?></td>
              <td><?= $t["posisi"]; ?></td>
              <td><?= $t["no_hp"]; ?></td>
              <td><?= $t["fb"]; ?></td>
              <td><?= $t["ig"]; ?></td>
              <td><?= $t["twitter"]; ?></td>
             
              <td> <img class="tim img-thumbnail" src="<?=base_url()?>assets/upload/tim/thumbnail/<?=$t['foto']?>"> </td>
              <td>
         
               

                <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick=" return confirm('Apakah data ini akan dihapus ?')" href="<?= base_url(); ?>tim/hapus/<?= $t['id'].'/'.$t['foto']; ?>">
                  <i class="fas fa-trash fa"></i>
                </a>

                <a class="btn btn-warning float-right mr-2" href="<?= base_url(); ?>tim/edit/<?= $t['id']; ?>">
                  <i class="fas fa-edit fa"></i>
                </a>
                <a class="btn btn-success float-right mr-2" href="<?= base_url(); ?>tim/detail/<?= $t['id']; ?>">
                  <i class="fas fa-eye fa-lg"></i>
                </a>

                <!-- <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>tim/detail/<?= $t['id']; ?>">
                  <i class="fas fa-eye fa"></i>
                </a> -->


              </td>

            </tr>


          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (empty($tim)):?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

        <?php endif; ?>



        



    </div>
    <!-- /.container-fluid -->

</div>

