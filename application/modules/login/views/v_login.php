<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo-prakin.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-3">Silahkan masuk dengan data yang sudah diregistrasi</p>
                    <?= $this->session->userdata('message'); ?>
                    <form action="<?= base_url('login') ?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-3">
                            <input type="email" class="form-control form-control-xl" name="email" id="email" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-3">
                            <input type="password" class="form-control form-control-xl" name="password" id="password" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Izinkan tetap masuk
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-4" type="submit">Masuk</button>
                    </form>
                    <div class=" mt-4 text-lg fs-5">
                        <p class="text-gray-600" >Belum punya akun? <a href="<?= base_url(); ?>website/#contact"
                                class="font-bold">Daftar akun</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>