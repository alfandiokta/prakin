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
                            <h3>Calon Peserta Magang</h3>
                            <p class="text-subtitle text-muted">Data Calon Peserta Magang Aktif</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pendaftar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    
                    <button class="btn btn-primary me-1 mb-2" data-bs-toggle="modal" 
                    data-bs-target="#kouta">Ubah Kuota Magang</button>
                
                    <div class="card">
                    <div class="card">
       
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                         <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIM/NISN</th>
                                        <th>Instansi</th>
                                        <th>WA</th>
                                        <th>Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach ($magang as $mg) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $mg['nama']; ?></td>
                                        <td><?= $mg['nimnis']; ?></td>
                                        <td><?= $mg['instansi']; ?></td>
                                        <td><?= $mg['wa']; ?></td>
                                        <td><?= $mg['keahlian']; ?></td>
                                        <td><a class="btn btn-primary me-1 mb-1" href="<?= base_url(); ?>pendaftar/detail/<?= $mg['id']?>">Detail</a> 
                                        <a class="btn btn-warning me-1 mb-1" href="<?= base_url('pendaftar/update_data/' . $mg['id']); ?>" >Diterima</a>
                                        <a class="btn btn-danger me-1 mb-1" href="<?= base_url('pendaftar/update_data_ditolak/' . $mg['id']); ?>" >Ditolak</a>
                                         <?php 
                                         $wa=$mg['wa'];
                                         $nama=$mg['nama'];
                                         ?>
                                         <a class="btn btn-success me-1 mb-1" target="_blank" 
                                         href="<?= ('https://api.whatsapp.com/send?phone=' . $wa . '&text=Halloo%20' . $nama) ?>" >Whatsapp</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>



                 <!--form Modal -->
                 <div class="modal fade text-left" id="kouta" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Ubah Kuota Magang </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>pendaftar/update_kouta/" method="post">
                                                            <div class="modal-body">
                                                                <!-- <label>Nama : </label> -->
                                                                <div class="form-group">
                                                                <?php 
                                                                foreach ($kuota as $k) :
                                                                ?>
                                                                <label>Jumlah kuota magang saat ini : <?=$k['kouta']?></label>
                                                                <?php endforeach; ?>
                                                                    <input type="number" 
                                                                        class="form-control" name="kouta">
                                                                </div>
                                                              
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Tutup</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-primary ml-1"
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
</div>

