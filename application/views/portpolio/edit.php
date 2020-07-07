<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Update Data Portpolio
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="<?= base_url()?>portpolio/updatedata" method="post">
                                <input type="hidden" name="id" value="<?=$portpolio['id']?>">
                                <input type="hidden" name="filelama" value="<?=$portpolio['foto']?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select class="form-control"name="kategori" id="kategori">
                                            <option value="kategori1"><?=$portpolio['kategori'];?></option>
                                            <option value="kategori1">Kategori  1</option>
                                            <option value="kategori2">Kategori  2</option>
                                            <option value="kategori3">Kategori  3</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Foto</label>
                               <input  class="form-control"  name="foto" type="file" value="<?=$portpolio['foto']?>">
                                <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 mb-2 float-right">
                            </div>
                       

                        </div>



                    </div>

                    </form>




                </div>
            </div>
        </div>
