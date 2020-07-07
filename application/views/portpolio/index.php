<div id="content">

    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <h5 class="text-center mt-3 mb-3"><?=$judul;?></h5>
       <?php if($this->session->flashdata()):?>
        <div class="row mt-3 text-center">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Data berhasil <?= $this->session->flashdata('flash'); ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
<?php endif;?>
    </div>
    <a class="btn btn-primary m-3" href="<?= base_url()?>portpolio/tambah"> <i class="fas fa-"></i> Tambah</a>
    <table id="table" class="table table-hover table-striped" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Foto</th>
             <th scope="col">Aksi</th>
          </tr>
        </thead>
    
        <tbody>


      
        <?php $start=1;?>
          <?php
          foreach ($portpolio as $p) :   ?>
     
         
            <tr>
             
            </th>
              <td><?= $start++; ?></td>
              <td><?= $p["foto"]; ?></td>
           
            
              <td>
                <img class=" rounded-circle img-thumbnail" src="<?=base_url()?>assets/upload/portpolio/thumbnail/<?=$p['foto']?>"> </td>
              <td>
                <!-- <a href="<?= $p["id"]; ?>"><button type="button" data-toggle="modal" data-target="#detail" class="btn btn-primary"><i class="fas fa-info"></i></button></a>
            <a href="<?= $p["id"]; ?>"><button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a> -->

                <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick="return confirm('Apakah data ini akan dihapus ?')" href="<?= base_url(); ?>portpolio/hapus/<?= $p['id'].'/'.$p['foto']?>">
                  <i class="fas fa-trash fa"></i>
                </a>

                <!-- <a class="btn btn-warning float-right mr-2" href="< ?= base_url(); ?>portpolio/edit/<?= $p['id']; ?>">
                  <i class="fas fa-edit fa"></i>
                </a> -->

                <!-- <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>portpolio/detail/<?= $p['id']; ?>">
                  <i class="fas fa-eye fa"></i>
                </a> -->


              </td>

            </tr>


          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (empty($portpolio)):?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

        <?php endif; ?>



        



    </div>
    <!-- /.container-fluid -->

</div>

