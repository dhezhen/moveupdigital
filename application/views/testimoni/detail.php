<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Testimoni
                </div>
                <div class="card-body">
                    <div class="card text-center">
                       
                            Testimoni Detail
                   

                        <h5 class="card-title"><?= $testimoni['nama'] ?></h5>
                        <h5 class="card-title"><?= $testimoni['pekerjaan'] ?></h5>
                        <h5 class="card-title"><?= $testimoni['bintang'] ?></h5>
                        <h5 class="card-title"><?= $testimoni['foto'] ?></h5>

                        <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Kembali</a>

                        <div class="card-footer text-muted">
                            Mahasiwa Detail
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>