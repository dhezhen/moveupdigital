<div id="content">
    <div class="container-fluid">
        <div class="d-flex flex-column">

            <div class="card">
                <div class="card-header">
                    Update Data Testimoni
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 border">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$testimoni['id']?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="<?=$testimoni['nama']?>" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" value="<?=$testimoni['pekerjaan']?>" placeholder="Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Rating</label>
                                    <select class="form-control" name="bintang">

                                    <option > <?=$testimoni['bintang'];?> </option>
<i class="lni lni-star-filled"></i>
                                        <option value='<i class="lni lni-star-filled"></i>'> Bintang 1</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 2</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 3</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 4</option>
                                        <option value='<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>'> Bintang 5</option>
                                    </select>
                                </div>


                        </div>

                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Testimoni</label>
                                <textarea class="form-control" name="isi_testimoni" rows="6"> <?=$testimoni['isi_testimoni']?></textarea>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 float-right">
                            </div>
                        </div>

                    </div>

                    </form>




                </div>
            </div>
        </div>
