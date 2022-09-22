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
                            <p class="text-subtitle text-muted">Data Peserta Magang Aktif</p>
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
                                        <img class="img-fluid w-100" src="<?= base_url('assets/doc/' . $get['fotodiri']); ?>"
                                        alt="Card image cap">
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
                                    <!-- <img src="<?= $get['fotodiri']; ?>" class="card-img-top img-fluid"> -->
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
                                    <li class="list-group-item">Status : <?= $get['instansi']; ?></li>                               
                                    <li class="list-group-item">Instansi : <?= $get['instansi']; ?></li>
                                    
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
                                                <a href="<?= base_url("magang_selesai/download/".$get['surat']); ?>"><?= $get['surat']; ?></a></li>
                                            <li class="list-group-item">Portofolio : 
                                                <a href="<?= base_url("magang_selesai/download/".$get['portofolio']); ?>"><?= $get['portofolio']; ?></a></li>
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
                                        <th>Jam</th>
                              
                                        <th>Aktivitas</th>
                                        <th>Uraian Aktivitas</th>
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
                                   $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
                                   from `tbl_absensi` 
                                   JOIN `tbl_user` 
                                   ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
                                   WHERE `tbl_user`.`id`='$id'";
                                   
                                   $absensi=$this->db->query($query)->result_array();
                                   
                                ?>
                                <?php 
                                $no = 1;
                                foreach ($absensi as $absn) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $absn['tanggal']; ?></td>
                                        <td><?= $absn['jam']; ?></td>
                                        <td><?= $absn['aktivitas']; ?></td>
                                        <td><?= $absn['uraian_aktivitas']; ?></td>
                                        <td><img  width="100px"src="<?= base_url('assets/doc/'.$absn['foto_aktivitas']); ?>"></td>
                                        <td><img  width="100px"src="<?= base_url('assets/doc/'.$absn['foto_ttd']); ?>"></td>
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
                                        <td><?= $tgs['tanggal']; ?></td>
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

