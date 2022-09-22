<div id="main">
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Menu Management</h3>
                            <p class="text-subtitle text-muted">Atur Menu</p>
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
                    <?= form_error('menu','<div class="alert-danger" role="alert">','</div>');?>
                    <?= $this->session->flashdata('message');?>
                    <div class="col-xl-6 col-md-8 col-sm-8">
                    <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="<?= base_url('menu') ?>" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-4">
                                                        <div class="form-group">
                                                            <!-- <label for="first-name-vertical">Nama</label> -->
                                                            <!-- <input type="hidden" id="email-id-vertical"
                                                                class="form-control" name="id"
                                                                placeholder="ID"
                                                                
                                                                > -->
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="menu"
                                                                 
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-2">
                                                        <div class="form-group">
                                                        <button type="submit" class="btn btn-primary " >Tambah Menu</button> 
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                    </div>
                    </div>



                    <div class="card">
       
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                         <th>No.</th>
                                        <th>Menu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach ($menu as $m) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $m['menu']; ?></td>
                                        
                                        <td><a class="btn btn-primary me-1 mb-1" href="<?= base_url(); ?>magang/detail/<?= $m['id']?>">Edit</a> 
                                        <a class="btn btn-danger me-1 mb-1" href="<?= base_url('pendaftar/update_data/' . $m['id']); ?>" >Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
</div>
</div>



                                           