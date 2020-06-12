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
                            <form action="<?=  base_url()?>testimoni/tambah" enctype=multipart/form-data method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                    <small class="form-text text-danger mb-1"> <?= form_error('nama') ?> </small>

                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan ">
                                    <small class="form-text text-danger mb-1"> <?= form_error('pekerjaan') ?> </small>

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Rating</label>
                                    <select class="form-control" name="bintang">
                                        <option value='<i class="lni lni-star-filled"></i>'> Bintang 1</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 2</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 3</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 4</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 5</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Foto</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-image fa-lg"></i></div>
                                        </div>
                                        <input type="file" class="form-control" name="foto" placeholder="Foto">
                                       
                                    </div>
                                </div>





                        </div>

                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Testimoni</label>
                                <textarea class="form-control" name="isi_testimoni" rows="6"> </textarea>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">
                                <small class="form-text text-danger mb-1"> <?= form_error('isi_testimoni') ?> </small>

                            </div>
                        </div>

                    </div>

                    </form>




                </div>
            </div>
        </div>