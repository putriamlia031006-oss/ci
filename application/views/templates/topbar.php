<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm px-3">

    <!-- Sidebar Toggle -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-primary">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto align-items-center">

        <!-- Notification -->
        <li class="nav-item mx-2">
            <a class="nav-link position-relative" href="#">
                <i class="fas fa-bell fa-lg text-gray-500"></i>
            </a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- User Dropdown -->
        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                id="userDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">

                <div class="text-right mr-3 d-none d-lg-block">
                    <div class="small text-gray-500">Administrator</div>
                    <div class="font-weight-bold text-dark">
                        Admin
                    </div>
                </div>

                <img class="img-profile rounded-circle border shadow-sm"
                    src="<?= base_url('assets/img/undraw_profile_2.svg') ?>"
                    width="45"
                    height="45">
            </a>

            <!-- Dropdown -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in border-0 rounded-lg"
                aria-labelledby="userDropdown">

                <a class="dropdown-item py-2" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                    Profile
                </a>

                <a class="dropdown-item py-2" href="#">
                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-warning"></i>
                    Pengaturan
                </a>

                <div class="dropdown-divider"></div>

                <div class="px-3 py-2">
                    <small class="text-muted">
                        Last Login:
                    </small><br>
                    <small class="font-weight-bold text-dark">
                        <?= date('d M Y H:i'); ?>
                    </small>
                </div>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item py-2 text-danger"
                    href="<?= site_url('auth/logout')?>">

                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Logout
                </a>

            </div>

        </li>

    </ul>

</nav>