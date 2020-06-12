<div class="container">
        

    <?php if ($this->session->flashdata('flash')) : ?>
    <!--
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa
                    <strong>Berhasil</strong> < ?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>-->
    <?php endif; ?> 

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?php base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>


        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <form method="post">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Data">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>

            </form>

        </div>
    </div>



    <div class="row">
        <div class="col-md-6">
            <h3> Daftar Mahasiswa </h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-info" role="alert">
                   Data Mahasiswa Tidak Ditemukan
                </div>

            <?php endif ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a class="btn btn-danger float-right tombol-hapus" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>">
                            Hapus
                        </a>

                        <a class="btn btn-primary float-right mr-2" href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ?>">
                            Detail
                        </a>

                        <a class="btn btn-warning float-right mr-2" href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>">
                            Edit
                        </a>

                    </li>
                <?php endforeach; ?>
            </ul>

        </div>

    </div>

</div>