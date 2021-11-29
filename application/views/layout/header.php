<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Halaman Petugas Lurah</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="<?= base_url(); ?>assets/img/logo/logo-web-lurah-rumbai.png" class="navbar-brand-img" alt="logo">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Role_petugas'); ?>">
                                <i class="fas fa-tv text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="fas fa-users text-primary"></i>
                                <span class="nav-link-text">Data Penduduk</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="nav-link" href="<?= site_url('Penduduk'); ?>">
                                    <i class="fas fa-user text-primary"></i>
                                    <span class="nav-link-text">Data Penduduk</span>
                                </a>
                                <a class="nav-link" href="<?= site_url('Kelahiran'); ?>">
                                    <i class="fas fa-user-plus text-primary"></i>
                                    <span class="nav-link-text">Data Kelahiran</span>
                                </a>
                                <a class="nav-link" href="<?= site_url('Kematian'); ?>">
                                    <i class="fas fa-user-minus text-primary"></i>
                                    <span class="nav-link-text">Data Kematian</span>
                                </a>
                                <a class="nav-link" href="<?= site_url('Permohonanpindah'); ?>">
                                    <i class="fas fa-people-carry text-primary"></i>
                                    <span class="nav-link-text">Data Permohonan Pindah</span>
                                </a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Berita'); ?>">
                                <i class="fas fa-newspaper text-primary"></i>
                                <span class="nav-link-text">Berita</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Galeri'); ?>">
                                <i class="far fa-image text-primary"></i>
                                <span class="nav-link-text">Galeri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Pengaduan'); ?>">
                                <i class="fas fa-bullhorn text-primary"></i>
                                <span class="nav-link-text">Pengaduan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Agenda'); ?>">
                                <i class="fas fa-calendar text-primary"></i>
                                <span class="nav-link-text">Agenda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Rw'); ?>">
                                <i class="fas fa-user text-primary"></i>
                                <span class="nav-link-text">RT & RW</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Sapras'); ?>">
                                <i class="fas fa-building text-primary"></i>
                                <span class="nav-link-text">Sarana & Prasarana</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Umkm'); ?>">
                                <i class="fas fa-store text-primary"></i>
                                <span class="nav-link-text">UMKM</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('Role_petugas/Pooling'); ?>">
                                <i class="ni ni-single-copy-04 text-primary"></i>
                                <span class="nav-link-text">Laporan Polling</span>
                            </a>
                        </li> -->
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?= base_url(); ?>assets/img/default.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->