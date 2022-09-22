<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

        <div class="page-heading">
                <h3>Dashboard</h3>
           

            
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                <i class="fas fa-sticky-note"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $data=$user['nimnis'];
                                            $query = "SELECT COUNT(nimnis) as absn FROM tbl_absensi where nimnis='$data'";
                                            $jlabsen= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($jlabsen as $absn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Catatan Aktivitas Kamu</h6>
                                                <h6 class="font-extrabold mb-0"><?=$absn['absn']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                <i class="fas fa-pen-alt"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $data=$user['nimnis'];
                                            $query = "SELECT COUNT(nimnis_tgs) as tugas FROM tbl_tugas where nimnis_tgs='$data'";
                                            $jltugas= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($jltugas as $tgs) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tugas Selesai</h6>
                                                <h6 class="font-extrabold mb-0"><?=$tgs['tugas']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                <i class="fas fa-comment-alt"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $data=$user['nimnis'];
                                            $query = "SELECT COUNT(nimnis_testi) as testimoni FROM tbl_testimoni where nimnis_testi='$data'";
                                            $testimoni= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($testimoni as $testi) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Testimoni Kamu</h6>
                                                <h6 class="font-extrabold mb-0"><?=$testi['testimoni']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="page-heading">
                        <h4>Hai, <?= $userdata['nama']; ?> apa kabar?</h4>
                    </div>
                
                       
                    
                      
                        <div class="row">
                            <div class="col-12 col-xl-4">
                            <div class="card " >
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="<?= base_url('assets/doc/img/' . $userdata['fotodiri']); ?>" >
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold"><?= $userdata['nama']; ?></h5>
                                            <h6 class="text-muted mb-0"><?= $userdata['email']; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php
                                if ($userdata['role_id'] == 3)  { ?>

                                <?php 
                                if ($pendaftar['magang'] < $kuota['kouta']) {?>
                                    <div class="col-12 col-xl-8">
                                        <div class="card text-center ">
                                            <!-- <div class="card-header text-center ">
                                                <h4>Pengumuman</h4>
                                            </div> -->
                                            
                                            <div class="card-body ">
                                            <img class="w-75 mb-4" src="<?= base_url('assets/images/org_sapa.png');?>" >

                                            <h5>Silahkan lengkapi biodata anda pada menu PROFIL</h5>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                } else if ($pendaftar['magang'] > $kuota['kouta']) {
                                ?>
                                
                                <div class="col-12 col-xl-8">
                                    <div class="card text-white bg-danger text-center">
                                        <!-- <div class="card-header  bg-danger">
                                            <h4 class="text-white">Pengumuman</h4>
                                        </div> -->
                                        <div class="card-body ">
                                        <img class="w-25 mb-2 img-fluid mx-auto" src="<?= base_url('assets/images/org_sedih.png');?>" >
                                        <h5 class="text-white">Mohon maaf kuota magang telah PENUH, Info lebih lanjut silahkan hubungi Humas BPMPK, Tetap SEMANGAT dan Jangan Menyerah</h5>
                                        
                                        </div>
                                    </div>
                                </div>

                                <?php
                                } else if ($pendaftar['magang'] = $kuota['kouta']) {
                                ?>
                                
                                <div class="col-12 col-xl-8">
                                    <div class="card text-white bg-danger text-center">
                                        <!-- <div class="card-header  bg-danger">
                                            <h4 class="text-white">Pengumuman</h4>
                                        </div> -->
                                        <div class="card-body ">
                                        <img class="w-25 mb-2 img-fluid mx-auto" src="<?= base_url('assets/images/org_sedih.png');?>" >
                                        <h5 class="text-white">Mohon maaf kuota magang telah PENUH, Info lebih lanjut silahkan hubungi Humas BPMPK, Tetap SEMANGAT dan Jangan Menyerah</h5>
                                        
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>
                                
                                <?php
                                } else if ($userdata['role_id'] == 4)  { ?>
                                <div class="col-12 col-xl-8">
                                    <div class="card text-center ">
                                        <!-- <div class="card-header text-center ">
                                            <h4>Pengumuman</h4>
                                        </div> -->
                                        
                                        <div class="card-body ">
                                        <img class="w-75 mb-4" src="<?= base_url('assets/images/org_sapa.png');?>" >

                                        <h5>Yeah, kamu sudah SELESAI magang di BPMPK, Tetap SEMANGAT dan teruslah BERKARYA</h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                } else if ($userdata['role_id'] == 6) { ?>
                                <div class="col-12 col-xl-8">
                                    <div class="card text-white bg-danger text-center">
                                        <!-- <div class="card-header  bg-danger">
                                            <h4 class="text-white">Pengumuman</h4>
                                        </div> -->
                                        <div class="card-body ">
                                        <img class="w-25 mb-2 img-fluid mx-auto" src="<?= base_url('assets/images/org_sedih.png');?>" >
                                        <h5 class="text-white">Mohon maaf kamu belum berkesempatan menjalankan program Magang di BPMPK, Tetap SEMANGAT dan Jangan Menyerah</h5>
                                        
                                        </div>
                                    </div>
                                </div>
                                <?php }else { ?>
                                    <div class="col-12 col-xl-8">
                                    <div class="card text-center">
                                        <!-- <div class="card-header">
                                            <h4>Pengumuman</h4>
                                        </div> -->
                                        
                                        <div class="card-body">
                                        <img class="w-75 mb-4" src="<?= base_url('assets/images/org_sapa.png');?>" >

                                        <h5 class="mx-auto">Yuk isi catatan aktivitas kamu</h5>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                          
                                                
                        </div>
                      


                    </div>
                </section>
            </div>