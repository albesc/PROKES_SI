<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h3 class="h1 text-white d-inline-block mb-0">RW 01</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="../img/default_profile.png" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">
                            Jessica Jones<span class="font-weight-light">, 27</span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>Ketua RW
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail RW </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informasi RW</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Alamat</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="Nama" value="">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No HP</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="No HP" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Masa Jabatan</label>
                                        <input type="text" id="input-username" class="form-control" placeholder=".. Tahun" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="mb-0">List RT</h3>
                        </div>
                        <div class="col-sm-2">
                            <a href="<?= site_url('Rtrw/add_rt'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <td scope="col" class="sort" data-sort="nik">No</td>
                                <td scope="col" class="sort" data-sort="nik">RT</td>
                                <td scope="col" class="sort" data-sort="nama">Nama Ketua RT</td>
                                <td scope="col" class="sort" data-sort="asal">Jumlah Warga Laki-laki</td>
                                <td scope="col" class="sort" data-sort="asal">Jumlah Warga Perempuan</td>
                                <td scope="col"></td>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span>1</span>
                                    </div>
                                </th>
                                <td class="budget">
                                    01
                                </td>
                                <td>
                                    Bambang
                                </td>
                                <td>
                                    250
                                </td>
                                <td>
                                    250
                                </td>
                                <td class="text-right">
                                    <a href="<?= site_url('Rtrw/detail_rt'); ?>" class="btn btn-info"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail</a>&nbsp;&nbsp;&nbsp;
                                    <a href="<?= site_url('Rtrw/edit_rt'); ?>" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>