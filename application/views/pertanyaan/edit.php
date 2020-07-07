<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Update Data Pertanyaan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$pertanyaan['id']?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Pertanyaan</label>
                                    <input type="text" name="jenis_pertanyaan" class="form-control" value="<?=$pertanyaan['jenis_pertanyaan']?>" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jawaban</label>
                                  
                                    <textarea  name="jawaban" class="form-control" value="<?=$pertanyaan['jawaban']?>" placeholder="jawaban">
                                    <?=$pertanyaan['jawaban']?>
                                    </textarea>
                                    
                                    <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">
                                </div>
                               

                        </div>

                      

                    </div>

                    </form>




                </div>
            </div>
        </div>
