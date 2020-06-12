<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('nama')?> </small>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan ">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('email')?> </small>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                  <textarea name="isi_pesan" id="" cols="30" rows="10"></textarea>
                                    <small  class="form-text text-danger mb-1"> <?= form_error('isi_pesan')?> </small>
                                    <button class="btn btn-primary" type="submit">submit</button>

                                </form>
                                </div>
                                

                        </div>

                       

                    </div>





                </div>
            </div>
        </div>

