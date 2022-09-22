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
                            <h3>Testimoni</h3>
                            <p class="text-subtitle text-muted">Silahkan isi formulir berikut</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>user">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimoni</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-10 col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Formulir Testimoni</h4>
                                </div> -->
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="<?= base_url('user/upload_testimoni') ?>" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                     
                                                            <input type="hidden" id="first-name-vertical"
                                                                class="form-control" name="nimnis"
                                                                value="<?=$user['nimnis']?>">
                                                                
                                                                <input type="hidden" id="first-name-vertical"
                                                                class="form-control" name="tanggal"
                                                                value="<?= date('d F Y')?> ">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Testimoni</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3" name="testimoni" maxlength="100"></textarea>
                                                        </div>
                                                    </div>
                                            
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

