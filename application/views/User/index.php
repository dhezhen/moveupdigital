<div id="content">

    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <h5 class="text-center mt-3 mb-3"><?=$judul;?></h5>
    </div>
    <a class="btn btn-primary m-3" href="<?= base_url()?>login/tambah"> <i class="fas fa-user-plus"></i> Tambah</a>
    <table id="table" class="table table-hover table-striped" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <!-- <th scope="col">Foto</th> -->
             <th scope="col">Aksi</th>
          </tr>
        </thead>
    
        <tbody>


      
          <?php
         
          foreach ($user as $u) :   ?>
          <?php $start=1;?>
         
            <tr>
                
             
            </th>
              <td><?= $start; ?></td>
              <td><?= $u["nama"]; ?></td>
              <td><?= $u["username"]; ?></td>
              <td><?= $u["password"]; ?></td>
         
             
              <!-- <td> <img class="img-profile rounded-circle" src="< ?=base_url()?>assets/img/< ?=$u['foto'];?>"> </td>
              <td> -->
                <!-- <a href="<?= $u["id"]; ?>"><button type="button" data-toggle="modal" data-target="#detail" class="btn btn-primary"><i class="fas fa-info"></i></button></a>
            <a href="<?= $u["id"]; ?>"><button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a> -->
<td>
                <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick="return('Apakah Adata ini akan dihapus');"href="<?= base_url(); ?>login/hapus/<?= $u['id']; ?>">
                  <i class="fas fa-trash fa"></i>
                </a>

                <a class="btn btn-warning float-right mr-2" href="<?= base_url(); ?>login/edit/<?= $u['id']; ?>">
                  <i class="fas fa-edit fa"></i>
                </a>

                <!-- <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>usr/detail/<?= $u['id']; ?>">
                  <i class="fas fa-eye fa"></i>
                </a> -->


              </td>

            </tr>


          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (empty($user)):?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

        <?php endif; ?>



        



    </div>
    <!-- /.container-fluid -->

</div>

