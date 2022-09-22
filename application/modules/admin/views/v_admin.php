<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>

            
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <?php
                            if ($userdata['role_id'] == 1)  { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="stats-icon blue ">
                                                <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <?php
                                            
                                            $query = "SELECT COUNT(role_id) as magang FROM tbl_user where role_id=2";
                                            $pmagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($pmagang as $mgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Peserta Magang</h6>
                                                <h6 class="font-extrabold mb-0"><?=$mgn['magang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                <i class="fas fa-user-plus"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $query = "SELECT COUNT(role_id) as pendmagang FROM tbl_user where role_id=3";
                                            $dmagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($dmagang as $dmgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Pendaftar</h6>
                                                <h6 class="font-extrabold mb-0"><?=$dmgn['pendmagang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                <i class="fas fa-user-check"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $query = "SELECT COUNT(role_id) as pendmagang FROM tbl_user where role_id=4";
                                            $smagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($smagang as $smgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Magang Selesai</h6>
                                                <h6 class="font-extrabold mb-0"><?=$smgn['pendmagang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                <i class="fas fa-user-alt-slash"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $query = "SELECT COUNT(role_id) as pendmagang FROM tbl_user where role_id=6";
                                            $smagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($smagang as $smgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Ditolak</h6>
                                                <h6 class="font-extrabold mb-0"><?=$smgn['pendmagang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            } else if ($userdata['role_id'] == 5)  { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="stats-icon blue ">
                                                <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <?php
                                            
                                            $query = "SELECT COUNT(role_id) as magang FROM tbl_user where role_id=2";
                                            $pmagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($pmagang as $mgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Peserta Magang</h6>
                                                <h6 class="font-extrabold mb-0"><?=$mgn['magang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                <i class="fas fa-user-check"></i>
                                                </div>
                                            </div>
                                            <?php
                                            $query = "SELECT COUNT(role_id) as pendmagang FROM tbl_user where role_id=4";
                                            $smagang= $this->db->query($query)->result_array();
                                            ?>
                                            <?php 
                                            foreach ($smagang as $smgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Magang Selesai</h6>
                                                <h6 class="font-extrabold mb-0"><?=$smgn['pendmagang']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                <i class="fas fa-calendar-check"></i>
                                                </div>
                                            </div>
                                            
                                            <?php 
                                            foreach ($jmlabsen as $dmgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Absen Hari Ini</h6>
                                                <h6 class="font-extrabold mb-0"><?=$dmgn['jml']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                <i class="fas fa-chart-line"></i>
                                                </div>
                                            </div>
                                            <?php
                                            
                                            ?>
                                            <?php 
                                            foreach ($jmltgs as $smgn) :
                                            ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tugas Hari Ini</h6>
                                                <h6 class="font-extrabold mb-0"><?=$smgn['jml']?></h6>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php
                            } ?>
                            
                        </div>
                      
                    </div>
                    <div class="page-heading">
                    <?php
                    if ($userdata['role_id'] == 1)  { ?>
                        <h4>Hai, Koordinator <?= $user['nama']; ?> apa kabar?</h4>
                    <?php
                    } else if ($userdata['role_id'] == 5)  { ?>
                        <h4>Hai, Pendamping <?= $user['nama']; ?> apa kabar?</h4>
                    <?php
                    } ?>
                    </div>
                    <div class="row">
                            <div class="col-12 col-xl-4">
                            <div class="card " >
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex align-items-center">
                                       
                                        <div class="ms-3 name">
                                            <h5 class="font-bold"><?= $user['nama']; ?></h5>
                                            <h6 class="text-muted mb-0"><?= $user['email']; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            
                             
                                <div class="col-12 col-xl-8">
                                    <div class="card text-center ">
                                        <!-- <div class="card-header text-center ">
                                            <h4>Pengumuman</h4>
                                        </div> -->
                                        
                                        <div class="card-body ">
                                        <?php
                                        if ($userdata['role_id'] == 1)  { ?>
                                            <h5>Yuk, Cek pendaftar hari ini</h5>
                                        <?php
                                        } else if ($userdata['role_id'] == 5)  { ?>
                                            <h5>Yuk, Cek keaktifan peserta magang</h5>
                                        <?php
                                        } ?>
                                        
                                        <img class="w-75 mb-4" src="<?= base_url('assets/images/org_sapa.png');?>" >

                                        </div>
                                    </div>
                                </div>
                               

                          
                                                
                        </div>
                </section>
            </div>