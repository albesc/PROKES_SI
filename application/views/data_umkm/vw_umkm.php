    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h3 class="h1 text-white d-inline-block mb-0">Data UMKM</h3>
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
                                <div class="col-sm-7">
                                    <a href="<?= site_url('Umkm/add'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                                </div>
                                <div class="col-sm-2">
                                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                                        <div class="form-group mb-0">
                                            <div class="input-group input-group-alternative input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Cari berdasarkan nama" type="text">
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
                                        <td scope="col" class="sort" data-sort="id">No</td>
                                        <td scope="col" class="sort" data-sort="asal">Nama Usaha</td>
                                        <td scope="col" class="sort" data-sort="asal">Kategori Usaha</td>
                                        <td scope="col" class="sort" data-sort="asal">Alamat</td>
                                        <td scope="col" class="sort" data-sort="asal">Kontak</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                    $i = 1;
                                    foreach ($umkm as $u) {
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <div class="media-body">
                                                    <span><?= $i ?></span>
                                                </div>
                                            </th>
                                            <td>
                                                <?= $u['nama_usaha'] ?>
                                            </td>
                                            <td>
                                                <?php foreach ($umkm_kat as $uk) :
                                                    if ($u['id_kat'] == $uk['id_kat']) { ?>
                                                        <?= $uk['nama']; ?>
                                                <?php }
                                                endforeach; ?>
                                            </td>
                                            <td>
                                                <?= word_limiter($u['alamat'], 5) ?>
                                            </td>
                                            <td>
                                                <?= $u['kontak'] ?>
                                            </td>
                                            <td class="text-right">
                                                <a href="<?= site_url('Umkm/detail/') . $u['id_umkm']; ?>" class="btn btn-info"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?= site_url('Umkm/edit/') . $u['id_umkm']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <!-- <ul class="pagination justify-content-end mb-0">
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
                                </ul> -->
                                <?= $links; ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>