<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Modern Admin</title>

    <!-- Custom fonts -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .container {
            margin-top: 0 !important;
        }

        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2) !important;
        }

        .bg-login-image {
            background: url('https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
        }

        .form-control-user {
            border-radius: 10px !important;
            padding: 1.5rem 1rem !important;
            border: 1px solid #eaecf4;
        }

        .form-control-user:focus {
            border-color: #764ba2;
            box-shadow: 0 0 0 0.2rem rgba(118, 75, 162, 0.25);
        }

        .btn-user {
            border-radius: 10px !important;
            padding: 0.75rem !important;
            font-weight: 600;
            letter-spacing: 0.5px;
            background: #764ba2;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-user:hover {
            background: #5e3a85;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .text-gray-900 {
            color: #2d3436 !important;
            font-weight: 700;
        }

        .small {
            font-size: 85%;
            color: #636e72;
        }

        .alert {
            border-radius: 12px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- Image Column -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <div style="height: 100%; width: 100%; background: rgba(118, 75, 162, 0.2); backdrop-filter: blur(2px);"></div>
                            </div>
                            
                            <!-- Form Column -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-4">
                                        <h1 class="h3 text-gray-900 mb-2">Selamat Datang!</h1>
                                        <p class="text-muted">Silakan masukkan akun Anda untuk melanjutkan.</p>
                                    </div>

                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="fas fa-exclamation-circle mr-2"></i>
                                            <?= $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <form class="user" method="post" action="<?= site_url('login/proses');?>">
                                        <div class="form-group">
                                            <label class="ml-2 small font-weight-bold">Username</label>
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Masukkan username..." required>
                                        </div>

                                        <div class="form-group">
                                            <label class="ml-2 small font-weight-bold">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="••••••••" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                            Masuk ke Dashboard
                                        </button>
                                    </form>

                                    <hr class="my-4">

                                    <div class="text-center">
                                        <a class="small font-weight-bold" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-center mt-2">
                                        <span class="small text-muted">Belum punya akun?</span>
                                        <a class="small font-weight-bold" href="register.html"> Daftar Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>
</html>