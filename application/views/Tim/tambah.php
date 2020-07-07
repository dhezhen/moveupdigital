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
                            <form action="<?=base_url()?>tim/insertdata" enctype=multipart/form-data method="post">
                        
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('nama')?> </small>

                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Posisi</label>
                                    <input type="text" name="posisi" class="form-control"  placeholder="Posisi">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('posisi')?> </small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Hp / WA </label>
                                    <input type="text" name="no_hp" class="form-control"  placeholder="No Hp">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('no_hp')?> </small>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Facebook</label>
                                    <input type="text" name="fb" class="form-control"  placeholder="Facebook">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('facebook')?> </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Twitter</label>
                                    <input type="text" name="twitter" class="form-control"  placeholder="twitter">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('twitter')?> </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Instagram</label>
                                    <input type="text" name="ig" class="form-control"  placeholder="Instagram">
                                    <small  class="form-text text-danger mb-1"> <?= form_error('ig')?> </small>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Foto</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-image fa-lg"></i></div>
                                        </div>
                                        <input type="file" class="form-control" name="foto" placeholder="Foto">
                                        
                                    </div>
                                    <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">
                                </div>





                        </div>

                       

                    </div>

                    </form>




                </div>
            </div>
        </div>