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
                            <p class="text-subtitle text-muted">Edit Data diri peserta magang</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                     
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>profil">Profil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                              
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Data Diri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="<?= base_url('profil/update_profil') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Nama</label>
                                                            <input type="hidden" id="email-id-vertical"
                                                                class="form-control" name="id"
                                                                placeholder="ID"
                                                                value="<?=$user['id']?>"
                                                                >
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="nama"
                                                                placeholder="Nama" 
                                                                value="<?=$profil['nama']?>" 
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">NIM/NISN</label>

                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="nimnis"
                                                                placeholder="NIM/NISN"
                                                                value="<?=$profil['nimnis']?>" readonly
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Asal Instansi</label>
                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="instansi"
                                                                placeholder="Asal Instansi"
                                                                value="<?=$profil['instansi']?>" 
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Alamat Instansi</label>
                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="alamat_in"
                                                                placeholder="Alamat Instansi"
                                                                value="<?=$profil['alamat_in']?>"
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Alamat Peserta Magang</label>
                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="alamat_mg"
                                                                placeholder="Alamat Peserta Magang"
                                                                value="<?=$profil['alamat_mg']?>"
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Email</label>
                                                            <input type="email" id="email-id-vertical"
                                                                class="form-control" name="email"
                                                                placeholder="Email"
                                                                value="<?=$profil['email']?>" readonly
                                                             >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">WA</label>
                                                            <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">+62</span>

                                                            <input type="tel" id="email-id-vertical"
                                                                class="form-control" name="wa"
                                                                placeholder="WA" 
                                                                value="<?= substr($profil['wa'], 2) ?>"
                                                                >
                                                            </div>
                                                                <!-- <div class="input-group ">
                                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                                    <input type="text" class="form-control" placeholder="WA" name="wa"
                                                                        aria-label="Username" aria-describedby="basic-addon1" value="<?=$profil['wa']?>">
                                                                </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Keahlian</label>
                                                            <input type="textarea" id="email-id-vertical"
                                                                class="form-control" name="keahlian"
                                                                placeholder="Keahlian"
                                                                value="<?=$profil['keahlian']?>"
                                                                >
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Surat Pengajuan</label>
                                                            <small class="text-muted">*pdf</small>
                                                            <input class="form-control" type="file" id="formFile" name="surat" value="<?=$profil['surat']?>">
                                                            <input name="surat1" type="hidden" value="<?= $profil['surat'];  ?>" class="form-control"/>
                                                            <a href="" ><i class="fas fa-fw fa-file-pdf"></i> <?=$profil['surat']?></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Portofolio</label>
                                                            <small class="text-muted">*kosongi jika belum ada, file pdf</small>
                                                            <input class="form-control" type="file" id="formFile" name="portofolio">
                                                            <input name="portofolio1" type="hidden" value="<?= $profil['portofolio'];  ?>" class="form-control"/>
                                                            <a href="" ><i class="fas fa-fw fa-file-pdf"></i> <?=$profil['portofolio']?></a>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Foto Diri</label>
                                                            <small class="text-muted">*foto formal, jpg/jpeg</small>
                                                            <input class="form-control" type="file" id="formFile" name="fotodiri">
                                                            <input name="old_image" type="hidden" value="<?= $profil['fotodiri'];  ?>">
                                                            <a href="" ><i class="fas fa-fw fa-file-pdf"></i> <?=$profil['fotodiri']?></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <a href="<?= base_url('profil') ?>" class="btn btn-light-primary me-2 mb-1">Tutup</a>    
                                                    <button type="submit"
                                                            class="btn btn-primary me-2 mb-1">Kirim</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
</div>

