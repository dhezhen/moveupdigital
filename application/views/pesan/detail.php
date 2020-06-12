<div class="col-md-10">
    <div class="row inbox-wrapper">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 email-aside border-lg-right">

                        </div>

                        <div class="col-lg-10 email-content">
                            <div class="email-head">
                                <div class="email-head-subject">
                                    <div class="title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">

                                        </div>
                                        <div class="icons">
                                            <a href="<?= base_url() ?>pesan/hapus/<?= $pesan['id'] ?>" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash text-muted" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?=base_url()?>pesan" type="button" class="btn btn-outline-secondary"> <i class="fa fa-hand-point-left fa-lg"></i> Kembali</a>
                                <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                                   
                                    <div class="d-flex align-items-center">
                                        <div class="sender d-flex align-items-center">
                                            <a href="#"> <?= $pesan['email'] ?> </a> <span> - to</span><a href="#">me</a>
                                            <!-- <div class="actions dropdown">
                                                <a class="icon" href="#" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></a>
                                                <div class="dropdown-menu" role="menu">
                                                    <a class="dropdown-item" href="#">Mark as read</a>
                                                    <a class="dropdown-item" href="#">Mark as unread</a>
                                                    <a class="dropdown-item" href="#">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="date"> <i class="fa fa-clock fa-lg"></i> :<?= $pesan['tanggal_kirim'] ?></div>
                                </div>
                            </div>
                            <div class="email-body">




                                <p>Assalamualaikum Warahmatullah wabarakatuh,,,</p>

                                <div class="card">
                                    <div class="card-header">
                                        Isi Pesan :
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <div class="">
                                                <?= $pesan['isi_pesan'] ?>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>






                                <br>
                                <br>
                                <strong>Hormat saya</strong>,<br> <?= $pesan['nama'] ?></i>
                            </div>
                            <div class="email-attachments">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>