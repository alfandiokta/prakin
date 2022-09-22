<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>/images/favicon.png">
    <script src="https://kit.fontawesome.com/23582fb3ee.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url(); ?>user"><img src="<?= base_url(); ?>assets/images/logo-prakin.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT    `user_menu`.`id`, `menu`
                                FROM    `user_menu` JOIN `user_access_menu`
                                ON      `user_menu`.`id` = `user_access_menu`.`menu_id`
                                WHERE   `user_access_menu`.`role_id` =$role_id
                              ORDER BY  `user_access_menu`.`menu_id` ASC
                             ";
                $menu =$this->db->query($queryMenu)->result_array()
                ?>


                <div class="sidebar-menu">
                    <ul class="menu">

                    <?php foreach ($menu as $m) : ?>
                    <li class="sidebar-title"><?= $m['menu']?></li>


                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT * FROM `user_sub_menu`
                                        WHERE `menu_id` = $menuId
                                        AND `is_active` = 1
                    ";
                    $subMenu=$this->db->query($querySubMenu)->result_array()
                    ?>

                        <?php foreach ($subMenu as $sm) : ?>
                            <?php if ($title == $sm['title']) : ?>
                                <li class="sidebar-item active ">
                            <?php else : ?>
                                 <li class="sidebar-item ">
                            <?php endif; ?>

                            
                            <a href="<?= base_url($sm['url']); ?>" class='sidebar-link'>
                                <i class="<?= $sm['icon'] ;?>"></i>
                                <span><?= $sm['title'] ;?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>



                    <?php endforeach; ?>
                    
<!--                   
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="<?= base_url(); ?>user" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url(); ?>profil" class='sidebar-link'>
                                <i class="bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url(); ?>absensi" class='sidebar-link'>
                                <i class="bi-file-earmark-medical-fill"></i>
                                <span>Absensi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url(); ?>tugas" class='sidebar-link'>
                                <i class="bi-pen-fill"></i>
                                <span>Tugas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url(); ?>riwayat" class='sidebar-link'>
                                <i class="bi-bar-chart-fill"></i>
                                <span>Riwayat</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a href="<?= base_url('login/logout'); ?>" class='sidebar-link'>
                                <i class="bi-x-octagon-fill" style="color: tomato;"></i>
                                <span>Keluar</span>
                            </a>
                        </li>

                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>