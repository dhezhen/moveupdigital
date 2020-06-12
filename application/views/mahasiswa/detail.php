<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <div class="card text-center">
                       
                            Data Mahasiwa Detail
                   

                        <h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
                        <h5 class="card-title"><?= $mahasiswa['nik'] ?></h5>
                        <h5 class="card-title"><?= $mahasiswa['email'] ?></h5>
                        <h5 class="card-title"><?= $mahasiswa['jurusan'] ?></h5>

                        <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Kembali</a>

                        <div class="card-footer text-muted">
                            Mahasiwa Detail
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>