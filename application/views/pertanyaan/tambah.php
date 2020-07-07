<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Tambah Pertanyaan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="" method="post">
                        
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pertanyaan</label>
                                    <input type="text" name="jenis_pertanyaan" class="form-control" placeholder="Pertanyaan">
                                    <small class="form-text text-danger mb-1"> <?= form_error('jenis_pertanyaan') ?> </small>

                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jawaban</label>
                                    <textarea type="text" name="jawaban" class="form-control" id="exampleInputPassword1" placeholder="Jawaban "></textarea>
                                    <small class="form-text text-danger mb-1"> <?= form_error('jawaban') ?> </small>
                                    
                                <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">

                                </div>
                                        </div>

                    </form>




                </div>
            </div>
        </div>