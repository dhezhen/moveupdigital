<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6  ">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama </label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('nama')?> </small>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username ">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('username')?> </small>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" maxlength="8">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('password')?> </small>

                                </div>


                                <div>
                                    <button class="btn btn-primary float-right" type="submit"> Submit </button>
                                </div>
                                


                        </div>

                     
                    </div>

                    </form>




                </div>
            </div>
        </div>

