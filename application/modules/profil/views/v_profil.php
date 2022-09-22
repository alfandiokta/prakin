<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Profil</h3>
                            <p class="text-subtitle text-muted">Data diri peserta magang</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                <img class=" card-img-top card-img-bottom img-fluid " src="<?= base_url('assets/doc/img/' . $profil['fotodiri']); ?>">
                                    </div>
                                    
                                <!-- <div class="card-footer d-flex justify-content-between">
                                    <span>Card Footer</span>
                                    <button class="btn btn-light-primary">Read More</button>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 col-sm-12">
                            <div class="card">
                                        
                                <div class="card-content">
                                 
                                    <div class="card-body">
                        
                                        <h3 class="card-title"><?= $profil['nama']; ?></h3>
                                        <p class="card-text">+<?= $profil['wa']; ?> </p>
                                    </div>
                                </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> <a>NIM/NISN : </a><?= $profil['nimnis']; ?></li>
                                        <li class="list-group-item">Email :  <?= $profil['email']; ?></li>
                                        <li class="list-group-item">Asal Instansi : <?= $profil['instansi']; ?></li>
                                        <li class="list-group-item">Alamat Instansi :  <?= $profil['alamat_in']; ?></li>
                                        <li class="list-group-item">Alamat Rumah : <?= $profil['alamat_mg']; ?></li>
                                        <li class="list-group-item">Keahlian : <?= $profil['keahlian']; ?></li>
                                    </ul>
                                <div class="card-footer d-flex justify-content-between">
                                        <span>Perbarui Data Diri</span>
                                        <a href="<?= base_url('profil/profiledit') ?>"class="btn btn-light-primary">Edit</a>
                                    </div>
                                <!-- <?php
                                if ($user['role_id'] == 3) { ?>
                                    <div class="card-footer d-flex justify-content-between">
                                        <span>Perbarui Data Diri</span>
                                        <a href="<?= base_url('profil/profiledit') ?>"class="btn btn-light-primary">Edit</a>
                                    </div>
                                <?php }else { ?>
                                    <div class="card-footer d-flex justify-content-between">
                                    </div>
                                <?php } ?> -->

                               
                            </div>
                            
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Dokumen</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" href="">Surat Pengajuan : 
                                            <a href="<?= base_url("profil/downloadsurat/".$profil['surat']); ?>"><?= $profil['surat']; ?></a></li>
                                                <?php
                                                if ($profil['role_id'] == 3)  { ?>

                                                    <?php 
                                                    if ($pendaftar['magang'] < $kuota['kouta']) {?>
                                                        <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editsurat">Unggah Surat</button> <br></li>       
                                                    <?php
                                                    } else if ($pendaftar['magang'] > $kuota['kouta']) {
                                                    ?>

                                                    <?php
                                                    } else if ($pendaftar['magang'] = $kuota['kouta']) {
                                                    ?>
                                                    
                                                    <?php } ?>
                                                
                                                <?php
                                                } else if ($profil['role_id'] == 4)  { ?>
                                                    <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editsurat">Unggah Surat</button> <br></li>         
                                                <?php
                                                } else if ($profil['role_id'] == 6) { ?>
                                                    <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editsurat">Unggah Surat</button> <br></li>   
                                                <?php }else { ?>
                                                    <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editsurat">Unggah Surat</button> <br></li>     
                                                <?php } ?>

                                                <li class="list-group-item">Portofolio : 
                                                <a href="<?= base_url("profil/downloadporto/".$profil['portofolio']); ?>"><?= $profil['portofolio']; ?></a></li>
                                            <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editportofolio">Unggah Portofolio</button> <br></li>
                                            <li class="list-group-item">Tanda Tangan Diri : 
                                                <a href="<?= base_url("profil/downloadttd/".$profil['ttd']); ?>"><?= $profil['ttd']; ?></a></li>
                                            <li class="list-group-item"> <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editttd">Unggah TTD</button> <br></li>
                                        </ul>
                                        <!-- <div class="card-footer d-flex justify-content-between">
                                        <span>Ubah Dokumen</span>
                                        <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#editdokumen">Edit</button>
                                        </div> -->
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                            <!--form Modal -->
                            <div class="modal fade text-left" id="editsurat" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Unggah Surat</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>profil/update_surat/" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="password-vertical">Surat Pengajuan Magang</label>
                                                                    <small class="text-muted">*format pdf</small>
                                                                    <input class="form-control" type="hidden" id="formFile" name="nimnis" value="<?=$profil['nimnis']?>" >
                                                                    <input class="form-control" type="file" id="formFile" name="surat" >
                                                                    <input name="old_surat" type="hidden" value="<?= $profil['surat'];  ?>" class="form-control"/>
                                                                    
                                                                </div>
                                                           
                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Tutup</span>
                                                                </button>
                                                                <button type="submit" name="submit" id="submit" class="btn btn-primary ml-1"
                                                                    >
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Kirim</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                            </div>
                            <!--form Modal -->

                            <!--form Modal -->
                            <div class="modal fade text-left" id="editportofolio" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Unggah portofolio</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>profil/update_portofolio/" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="password-vertical">Portofolio Hasil Karya</label>
                                                                    <small class="text-muted">*format pdf, kosongi jika belum punya</small>
                                                                    <input class="form-control" type="hidden" id="formFile" name="nimnis" value="<?=$profil['nimnis']?>" >
                                                                    <input class="form-control" type="file" id="formFile" name="portofolio" >
                                                                    <input name="old_portofolio" type="hidden" value="<?= $profil['portofolio'];  ?>" class="form-control"/>
                                                                    
                                                                </div>
                                                           
                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Tutup</span>
                                                                </button>
                                                                <button type="submit" name="submit" id="submit" class="btn btn-primary ml-1"
                                                                    >
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Kirim</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                            </div>
                            <!--form Modal -->

                            <!--form Modal -->
                            <div class="modal fade text-left" id="editttd" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Unggah tanda tangan diri</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>profil/update_ttd/" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="password-vertical">Tanda Tangan Diri</label>
                                                                    <small class="text-muted">*format jpg/jpeg/png</small>
                                                                    <input class="form-control" type="hidden" id="formFile" name="nimnis" value="<?=$profil['nimnis']?>" >
                                                                    <input class="form-control" type="file" id="formFile" name="ttd" >
                                                                    <input name="old_ttd" type="hidden" value="<?= $profil['ttd'];  ?>" class="form-control"/>
                                                                    
                                                                </div>
                                                           
                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Tutup</span>
                                                                </button>
                                                                <button type="submit" name="submit" id="submit" class="btn btn-primary ml-1"
                                                                    >
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Kirim</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                            </div>
                            <!--form Modal -->
                          
                    

                </section>
</div>

