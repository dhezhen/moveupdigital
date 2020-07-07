<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Tambah Data Portpolio
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="<?=  base_url()?>portpolio/insertdata" enctype=multipart/form-data method="post">
                        
                                <div class="form-group mt-1 mb-2">
                                    <label for="exampleInputEmail1">Kategori</label>
                                        <select class="form-control"name="kategori" id="kategori">
                                            <option value="kategori1">Kategori  1</option>
                                            <option value="kategori2">Kategori  2</option>
                                            <option value="kategori3">Kategori  3</option>
                                        </select>
                                    <small class="form-text text-danger mb-1"> <?= form_error('kategori') ?> </small>

                                </div>  
                            
                        

                                <div class="form-group">
                                <label for="exampleInputEmail1">foto</label>
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