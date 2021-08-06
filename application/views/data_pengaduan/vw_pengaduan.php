    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h3 class="h1 text-white d-inline-block mb-0">Data Pengaduan </h3>
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
                                <div class="col-sm-10">
                                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                                        <div class="form-group mb-0">
                                            <div class="input-group input-group-alternative input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Cari Pengaduan" type="text">
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <td scope="col" class="sort" data-sort="id">ID Pengaduan</td>
                                        <td scope="col" class="sort" data-sort="nik">Nama Penduduk</td>
                                        <td scope="col" class="sort" data-sort="nama">Status</td>
                                        <td scope="col">Judul Pengaduan</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                    foreach ($pengaduan as $p) {
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm"><?= $p['pgdn_id'] ?></span>
                                                </div>
                                            </th>
                                            <td class="budget">
                                                <?= $p['nama'] ?>
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <span class="status"><?= $p['status'] ?></span>
                                                </span>
                                            </td>
                                            <td>
                                                <?= $p['pgdn_judul'] ?>
                                            </td>
                                            <td class="text-right">
                                                <a href="" class="btn btn-info"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail</a>&nbsp;&nbsp;&nbsp;
                                                <a href="" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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