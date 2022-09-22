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
                            <h3>Catatan Aktivitas</h3>
                            <p class="text-subtitle text-muted">Silahkan isi formulir kehadiran</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>user">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Catatan Aktivitas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-10 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Formulir Kehadiran</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="<?= base_url('absensi/upload_absensi') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Tanggal</label>
                                                            <input type="hidden" id="first-name-vertical"
                                                                class="form-control" name="nimnis"
                                                                placeholder="Tanggal" value="<?=$user['nimnis']?>">

                                                              
                                                            <input type="date" id="first-name-vertical"
                                                                class="form-control" name="tanggal"
                                                                placeholder="Tanggal" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Jam</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="jam" value="<?= date('H:i')?> WIB" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Aktivitas</label>
                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="aktivitas"
                                                                placeholder="Aktivitas">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Uraian Aktivitas</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3" name="uraian_aktivitas"></textarea>
                                                   
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Tugas Harian</label>
                                                            <small class="text-muted">*isikan link tugas</small>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="tgs_link"
                                                                placeholder="Link tugas" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <small class="text-muted">*atau pilih file</small>
                                                            <input type="file" id="first-name-vertical"
                                                                class="form-control" name="tgs_file" >
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Foto Aktivitas</label>
                                                            <input class="form-control" type="file" id="formFile" name="foto_aktivitas">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Foto Tanda Tangan</label>
                                                            <input class="form-control" type="file" id="formFile" name="foto_ttd">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Kirim</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Hapus</button>
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

