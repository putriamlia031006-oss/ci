<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion shadow" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-4" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-reader fa-2x"></i>
        </div>
        <div class="sidebar-brand-text mx-2 text-uppercase fw-bold">
            Perpustakaan
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Master Data -->
    <div class="sidebar-heading text-white-50 px-3">
        Master Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('kategori'); ?>">
            <i class="fas fa-tags"></i>
            <span>Kategori</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('anggota'); ?>">
            <i class="fas fa-user-friends"></i>
            <span>Anggota</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('buku'); ?>">
            <i class="fas fa-book-open"></i>
            <span>Data Buku</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Transaksi -->
    <div class="sidebar-heading text-white-50 px-3">
        Transaksi
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('peminjaman'); ?>">
            <i class="fas fa-exchange-alt"></i>
            <span>Peminjaman</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Laporan -->
    <div class="sidebar-heading text-white-50 px-3">
        Laporan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/peminjaman'); ?>">
            <i class="fas fa-file-alt"></i>
            <span>Laporan Peminjaman</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/anggota'); ?>">
            <i class="fas fa-users"></i>
            <span>Laporan Anggota</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/buku'); ?>">
            <i class="fas fa-book"></i>
            <span>Laporan Buku</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link text-danger" href="<?= site_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">