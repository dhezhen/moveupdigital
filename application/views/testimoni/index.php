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
    <a class="btn btn-primary m-3" href="<?= base_url()?>testimoni/tambah"> <i class="fas fa-"></i> Tambah</a>
    <table id="table" class="table table-hover table-striped" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Testimoni</th>
            <th scope="col">Rating</th>
            <th scope="col">Foto</th>
             <th scope="col">Aksi</th>
          </tr>
        </thead>
    
        <tbody>


      
          <?php
         
          foreach ($testimoni as $t) :   ?>
          <?php $start=1;?>
         
            <tr>
             
            </th>
              <td><?= $start; ?></td>
              <td><?= $t["nama"]; ?></td>
              <td><?= $t["pekerjaan"]; ?></td>
              <td><?= $t["isi_testimoni"]; ?></td>
              <td><?= $t["bintang"]; ?></td>
             
              <td> <img class=" testimoni rounded-circle img-thumbnail" src="<?=base_url()?>assets/upload/testimoni/thumbnail/<?=$t['foto']?>"> </td>
              <td>
                <!-- <a href="<?= $t["id"]; ?>"><button type="button" data-toggle="modal" data-target="#detail" class="btn btn-primary"><i class="fas fa-info"></i></button></a>
            <a href="<?= $t["id"]; ?>"><button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a> -->

                <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick="return confirm('Apakah data ini akan dihapus ?')" href="<?= base_url(); ?>testimoni/hapus/<?= $t['id'].'/'.$t['foto']?>">
                  <i class="fas fa-trash fa"></i>
                </a>

                <a class="btn btn-warning float-right mr-2" href="<?= base_url(); ?>testimoni/edit/<?= $t['id']; ?>">
                  <i class="fas fa-edit fa"></i>
                </a>

                <!-- <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>testimoni/detail/<?= $t['id']; ?>">
                  <i class="fas fa-eye fa"></i>
                </a> -->


              </td>

            </tr>


          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (empty($testimoni)):?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

        <?php endif; ?>



        



    </div>
    <!-- /.container-fluid -->

</div>

