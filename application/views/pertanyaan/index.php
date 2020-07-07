<div id="content">

    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <h5 class="text-center mt-3 mb-3"><?=$judul;?></h5>
    </div>

    <a class="btn btn-primary m-3" href="<?= base_url()?>pertanyaan/tambah"> <i class="fas fa-"></i> Tambah</a>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
    <table id="table" class="table table-hover table-striped" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col">Jawaban</th>
             <th scope="col">Aksi</th>
          </tr>
        </thead>
    
        <tbody>


      
        <?php $start=1;?>
          <?php
         
          foreach ($pertanyaan as $p) :   ?>
         
            <tr>
             
            </th>
              <td><?= $start++; ?></td>
              <td><?= $p["jenis_pertanyaan"]; ?></td>
              <td><?= $p["jawaban"]; ?></td>
            
             
              <td>
                <!-- <a href="<?= $p["id"]; ?>"><button type="button" data-toggle="modal" data-target="#detail" class="btn btn-primary"><i class="fas fa-info"></i></button></a>
            <a href="<?= $p["id"]; ?>"><button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-edit"></i></button></a> -->

                <a class="btn btn-danger float-right mr-2 tombol-hapus" onclick="return confirm('apakah data akan dihapus?');" href="<?= base_url(); ?>pertanyaan/hapus/<?= $p['id']; ?>">
                  <i class="fas fa-trash fa"></i>
                </a>

                <a class="btn btn-warning float-right mr-2" href="<?= base_url(); ?>pertanyaan/edit/<?= $p['id']; ?>">
                  <i class="fas fa-edit fa"></i>
                </a>

                <!-- <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>pertanyaan/detail/<?= $p['id']; ?>">
                  <i class="fas fa-eye fa"></i>
                </a> -->


              </td>

            </tr>


          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if (empty($pertanyaan)):?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown fa-lg"></i><span> Data Tidak Ditemukan</span>

        <?php endif; ?>



        



    </div>
    <!-- /.container-fluid -->

</div>

