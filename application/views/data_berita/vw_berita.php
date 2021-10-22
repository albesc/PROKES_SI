    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h3 class="h1 text-white d-inline-block mb-0">Data Berita</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="<?= site_url('Berita/add'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                                </div>
                                <div class="col-sm-3 text-right">
                                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                                        <div class="form-group mb-0">
                                            <div class="input-group input-group-alternative input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Cari berdasarkan judul" type="text">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="col-3">
                            <?php
                            $i = 1;
                            foreach ($berita as $b) : ?>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= base_url('assets/img/berita/') . $b['brt_gambar']; ?>" alt="pic">
                                    <div class="card-body">
                                        <h2 class="card-title"><?= $b['brt_judul']; ?></h2>
                                        <h3><i class="far fa-clock"></i>&nbsp;&nbsp;<?= $b['brt_tgl']; ?></h3>
                                        <div class="col-12 text-right">
                                            <a href="<?= site_url('Berita/edit/') . $b['brt_id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                            endforeach; ?>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                </div>
            </div>