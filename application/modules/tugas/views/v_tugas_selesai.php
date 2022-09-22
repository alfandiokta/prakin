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
                            <h3>Tugas Peserta Magang</h3>
                            <p class="text-subtitle text-muted">Dokumentasi Tugas Peserta Magang</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tugas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="card">
       
                        <div class="card-body">
                        <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>File Tugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach ($tugas as $tgs) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= strftime('%d %B %Y',strtotime($tgs['tanggal'])) ?></td>
                                        <td><?= $tgs['nama']; ?></td>
                                        <td><?= $tgs['deskripsi']; ?></td>
                                        <td><?= $tgs['file_tgs']; ?></td>
                                        <td><a class="btn btn-primary me-1 mb-1" href="<?= base_url("tugas_admin/download/".$tgs['file_tgs']); ?>">Download</a> </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
</div>
</div>

