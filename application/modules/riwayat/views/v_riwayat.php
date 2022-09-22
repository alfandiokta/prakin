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
                            <h3>Riwayat</h3>
                            <p class="text-subtitle text-muted">Riwayat catatan aktivitas</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>user">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="card">
                        <!-- <div class="card-header">
                            Simple Datatable
                        </div> -->

                        <div class="card-body">
                        <div class="col-12 d-flex justify-content-end">
                             <a href="<?= base_url('riwayat/export') ?>"class="btn btn-primary me-1 mb-1">Unduh</a>
                        </div>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Aktivitas</th>
                                        <th>Uraian Aktivitas</th>
                                        <th>Tugas Link</th>
                                        <th>Tugas File</th>
                                        <th>Foto</th>
                                        <th>TTD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                <?php 
                                $no = 1;
                                foreach ($riwayat as $absn) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= strftime('%d %B %Y',strtotime($absn['tanggal'])) ?></td>
                                        <td><?= $absn['aktivitas']; ?></td>
                                        <td><?= $absn['uraian_aktivitas']; ?></td>
                                        <td><a href="<?= $absn['tgs_link']; ?>" target='_blank'><?= $absn['tgs_link']; ?></a></td>
                                        <td><a href="<?= base_url("riwayat/download/".$absn['tgs_file']); ?>"><?= $absn['tgs_file']; ?></a></td>
                                        <td><img  width="50px"src="<?= base_url('assets/doc/img_absen/'.$absn['foto_aktivitas']); ?>"></td>
                                        <td><img  width="50px"src="<?= base_url('assets/doc/ttd/'.$absn['ttd']); ?>"></td>
                                    </tr>
                                <?php endforeach; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
</div>
