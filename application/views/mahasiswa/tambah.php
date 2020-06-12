<label class="container">
    <label class="row mt-3">
        <label class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body ">
                   <!-- < ?php if (validation_errors()) :?>
                        <div class="alert alert-danger p-1 m-1" role="alert">
                        < ?= validation_errors() ?>
                        </div>
                   < ?php endif;?> -->
                    <form action="" method="post">
                        <label class="form-group">
                            <label> Nama</label>
                            <input type="text" name='nama' class="form-control">
                            <small  class="form-text text-danger mb-1"> <?= form_error('nama')?> </small>

                        </label>

                        <label class="form-group">
                            <label> NIK</label>
                            <input type="text" name="nik" class="form-control">
                            <small  class="form-text text-danger mb-1"> <?= form_error('nik')?> </small>

                        </label>

                        <label class="form-group">
                            <label> Email</label>
                            <input type="text" name="email" class="form-control">
                            <small  class="form-text text-danger mb-1"> <?= form_error('email')?> </small>

                        </label>

                        <label class="form-group">
                            <label> Jurusan</label>
                            <select class="custom-select" name='jurusan'>
                                <option selected>Silahkan Pilih Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Management Informatika">Management Informatika</option>
                            </select>

                        </label>

                        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data</button>
                    </form>

                </div>
            </div>