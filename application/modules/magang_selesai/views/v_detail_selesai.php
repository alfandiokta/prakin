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
                            <h3>Detail Peserta Magang</h3>
                            <p class="text-subtitle text-muted">Data Peserta Magang Selesai</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>magang">Peserta Magang</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="row">
                        <?php
                        foreach ($get1 as $get) :    
                        ?>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title">Card With Header And Footer</h4>
                                        <p class="card-text">
                                            Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet
                                            roll. Toffee
                                            sugar plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                        </p> -->
                                        <img class="img-fluid w-100" src="<?= base_url('assets/doc/img/' . $get['fotodiri']); ?>"
                                        >
                                    </div>
                                   
                                </div>
                                <!-- <div class="card-footer d-flex justify-content-between">
                                    <span>Card Footer</span>
                                    <button class="btn btn-light-primary">Read More</button>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                        
                                <div class="card-content">
                                   
                                    <div class="card-body">
                                        
                                        <h5 class="card-title"><?= $get['nama']; ?></h5>
                                        <p class="card-text">
                                            <?= $get['wa']; ?>
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <a>NIM/NISN : </a><?= $get['nimnis']; ?></li>
                                    <li class="list-group-item">Email :  <?= $get['email']; ?></li>
                                    <li class="list-group-item">Asal Instansi : <?= $get['instansi']; ?></li>
                                    <li class="list-group-item">Alamat Instansi :  <?= $get['alamat_in']; ?></li>
                                    <li class="list-group-item">Alamat Rumah : <?= $get['alamat_mg']; ?></li>
                                    <li class="list-group-item">Keahlian : <?= $get['keahlian']; ?></li>
                                    
                                </ul>
                                
                            </div>
                            
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Dokumen</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" href="">Surat Pengajuan : 
                                                <a href="<?= base_url("magang_selesai/download_surat/".$get['surat']); ?>"><?= $get['surat']; ?></a></li>
                                            <li class="list-group-item">Portofolio : 
                                                <a href="<?= base_url("magang_selesai/download_portofolio/".$get['portofolio']); ?>"><?= $get['portofolio']; ?></a></li>
                                        </ul>
                                    </div>
                                    <!-- <img class="img-fluid w-100" src="assets/images/samples/banana.jpg"
                                        alt="Card image cap"> -->
                                </div>
                                
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="card">
       
                    <div class="card-body">
                            <h4 class="card-title">Absensi</h4>
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

                                <?php foreach ($get2 as $get) {
                                    $id = $get['id'];
                                ?>
                                <?php } ?>
                                <?php
                                   $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id`,`tbl_user`.`wa`,`tbl_dokumen`.`ttd` 
                                   from `tbl_absensi` 
                                   JOIN `tbl_user`
                                   ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
                                   JOIN `tbl_dokumen`
                                   ON `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc` 
                                   WHERE `tbl_user`.`nimnis`='$id'
                                   ORDER BY `tbl_absensi`.`id` DESC";
                                   
                                   $absensi=$this->db->query($query)->result_array();
                                   
                                ?>
                                <?php 
                                $no = 1;
                                foreach ($absensi as $absn) :
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
                    <div class="card">
       
                    <div class="card-body">
                            <h4 class="card-title">Tugas</h4>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>File Tugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($get2 as $get) {
                                    $id = $get['id'];
                                ?>
                                <?php } ?>

                                <?php
                                
                                   $query = "SELECT `tbl_tugas`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
                                   from `tbl_tugas` 
                                   JOIN `tbl_user` 
                                   ON `tbl_tugas`.`nimnis_tgs`=`tbl_user`.`nimnis` 
                                   WHERE `tbl_user`.`id`='$id'";
                                   
                                   $tugas=$this->db->query($query)->result_array();
                                   
                                ?>
                                <?php 
                                $no = 1;
                                foreach ($tugas as $tgs) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= strftime('%d %B %Y',strtotime($tgs['tanggal'])) ?></td>
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

