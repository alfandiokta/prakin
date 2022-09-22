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
                            <h3>Penguna</h3>
                            <p class="text-subtitle text-muted">Data Pengguna</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <button class="btn btn-primary me-1 mb-2" data-bs-toggle="modal" 
                    data-bs-target="#pengguna">Tambah pengguna</button>
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
                                        <th>Status</th>
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
                                        <td>
                                            <?php
                                            if ($mg['role_id'] == 1) { ?>
                                              <a class="text-primary">Admin</a>
                                            <?php
                                            } else if ($mg['role_id'] == 2) { ?>
                                                Peserta Magang
                                            <?php
                                            } else if ($mg['role_id'] == 3) { ?>
                                                Pendaftar
                                            <?php
                                            } else if ($mg['role_id'] == 4) { ?>
                                                Selesai Magang
                                                <?php
                                            } else if ($mg['role_id'] == 5) { ?>
                                                <a class="text-primary">Pendamping</a>
                                            <?php
                                            }else { ?>
                                            <a class="text-danger">Ditolak</a>
                                                
                                            <?php
                                            }
                                            ?>    
                                        </td>
                                  
                                        <td><button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#inlineForm<?= $mg['id']?>">Edit</button>
                                         <a class="btn btn-danger me-1 mb-1" href="<?= base_url(); ?>kelola_pengguna/hapus/<?= $mg['id']?>">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!--form Modal -->
                            <?php 
                                foreach ($magang as $mg) :
                            ?>
                             <div class="modal fade text-left" id="inlineForm<?= $mg['id']?>" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Edit </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>kelola_pengguna/update_data/" method="post">
                                                            <div class="modal-body">
                                                                <label>Nama : </label>
                                                                <div class="form-group">
                                                                <input type="hidden" id="id" name="id" value="<?= $mg['id']; ?>"
                                                                        class="form-control" readonly>
                                                                <input type="hidden" id="id" name="nimnis" value="<?= $mg['nimnis']; ?>"
                                                                        class="form-control" readonly>
                                                                
                                                                    <input type="text" value="<?= $mg['nama']; ?>"
                                                                        class="form-control" readonly>
                                                                </div>
                                                                <?php if ($mg['role_id'] ==2 ) {
                                                                ?>
                                                                <label>Pendamping : </label>
                                                                <div class="form-group">
                                                                <select class="form-select" id="role_id" name="pendamping">
                                                                    <option selected>--Pilih--</option>
                                                                    <?php foreach($role as $rl){?>
                                                                        <option value="<?= $rl['nimnis']; ?>"><?= $rl['nama']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  
                                                                </select>
                                                                </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <label>Status : </label>
                                                                <div class="form-group">
                                                                <select class="form-select" id="role_id" name="role_id">
                                                                    <option selected>--Pilih--</option>
                                                                    <option value="1">Admin</option>
                                                                    <option value="5">Pendamping</option>
                                                                    <option value="2">Peserta Magang</option>
                                                                    <option value="3">Pendaftar</option>
                                                                </select>
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
                            <?php endforeach; ?>
                            <!--form Modal -->


                            <!--form Modal -->
                             <div class="modal fade text-left" id="pengguna" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Tambah pengguna </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url(); ?>kelola_pengguna/tambah_data/" method="post">
                                                            <div class="modal-body">
                                                                <label>Nama : </label>
                                                                <div class="form-group">
                                                              
                                                                    <input type="text" 
                                                                        class="form-control" name="nama">
                                                                </div>
                                                                <label>NIM/NISN : </label>
                                                                <div class="form-group">
                                                              
                                                                    <input type="text" 
                                                                        class="form-control" name="nimnis">
                                                                </div>
                                                                <label>Instansi : </label>
                                                                <div class="form-group">
                                                              
                                                                    <input type="text" 
                                                                        class="form-control" name="instansi">
                                                                </div>
                                                                <label>Email : </label>
                                                                <div class="form-group">
                                                              
                                                                    <input type="email" 
                                                                        class="form-control" name="email">
                                                                </div>
                                                                <label>Password : </label>
                                                                <div class="form-group">
                                                              
                                                                    <input type="password" 
                                                                        class="form-control" name="password">
                                                                </div>

                                                                
                                                                <label>Status : </label>
                                                                <div class="form-group">
                                                                <select class="form-select" id="role_id" name="role_id">
                                                                    <option selected>--Pilih--</option>
                                                                    <option value="1">Admin</option>
                                                                    <option value="5">Pendamping</option>
                                                                    <option value="2">Peserta Magang</option>
                                                                    <option value="3">Pendaftar</option>
                                                                </select>
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
                    </div>
                </section>
</div>

