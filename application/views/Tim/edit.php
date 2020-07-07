<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Update Data Tim
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 border">
                            <form action="<?=base_url()?>" method="post">
                                <input type="hidden" name="id" value="<?=$tim['id']?>">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="<?=$tim['nama']?>" placeholder="Nama Lengkap">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Posisi</label>
                                    <input type="text" name="posisi" class="form-control" value="<?=$tim['posisi']?>" placeholder="Pekerjaan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Hp / WA </label>
                                    <input type="text" name="posisi" class="form-control" value="<?=$tim['posisi']?>" placeholder="Pekerjaan">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Facebook</label>
                                    <input type="text" name="fb" class="form-control" value="<?=$tim['fb']?>" placeholder="Pekerjaan">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="<?=$tim['twitter']?>" placeholder="Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Instagram</label>
                                    <input type="text" name="ig" class="form-control" value="<?=$tim['ig']?>" placeholder="Pekerjaan">
                                </div>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">

                  


                        </div>
                        <div class="col-md-6">

                        </div>

                       

                    </div>

                    </form>




                </div>
            </div>
        </div>
