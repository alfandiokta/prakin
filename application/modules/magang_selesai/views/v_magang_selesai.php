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
                            <h3>Peserta Magang Selsai</h3>
                            <p class="text-subtitle text-muted">Data Peserta Magang Selesai</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Magang Selesai</li>
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
                                        <td><?= $no++;?></td>
                                        <td><?= $mg['nama']; ?></td>
                                        <td><?= $mg['nimnis']; ?></td>
                                        <td><?= $mg['instansi']; ?></td>
                                        <td><?= $mg['wa']; ?></td>
                                        <td><?= $mg['keahlian']; ?></td>
                                        <td><a class="btn btn-primary me-1 mb-1" href="<?= base_url(); ?>magang_selesai/detail/<?= $mg['id']?>">Detail</a>
                                        
                                            <?php 
                                         $wa=$mg['wa'];
                                         $nama=$mg['nama'];
                                         ?>
                                         <a class="btn btn-success me-1 mb-1" target="_blank" 
                                         href="<?= ('https://api.whatsapp.com/send?phone=' . $wa . '&text=Halloo%20' . $nama) ?>" >Whatsapp</a>
                                         <a class="btn btn-danger me-1 mb-1" href="<?= base_url(); ?>magang_selesai/hapus/<?= $mg['id']?>">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
</div>

