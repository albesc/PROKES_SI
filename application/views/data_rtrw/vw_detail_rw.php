<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h3 class="h1 text-white d-inline-block mb-0"><?= $rw['no_rw'] ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="<?= base_url(); ?>assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="<?= base_url('assets/img/rw/') . $rw['rw_foto']; ?>" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">
                            <?= $rw['rw_nama'] ?>
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
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $rw['alamat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No HP</label><br>
                                        <label class="form-control-label" for="input-username"><?= $rw['no_tlp'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Masa Jabatan</label><br>
                                        <label class="form-control-label" for="input-username">3 Tahun</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tanggal Menjabat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $rw['tgl_jabat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tanggal Berakhir Jabatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $rw['tgl_akhir'] ?></label>
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
                        <div class="col-1">
                            <h3 class="mb-0">List RT</h3>
                        </div>
                        <div class="col-3">
                            <a href="<?= site_url('Rt/add'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
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
                            <?php
                            $i = 1;
                            foreach ($rt as $r) {
                                if ($rw['rw_id'] == $r['rw_id']) {
                            ?>
                                    <tr>
                                        <th scope="row">
                                            <div class="media-body">
                                                <span><?= $i ?></span>
                                            </div>
                                        </th>
                                        <td>
                                            <?= $r['no_rt'] ?>
                                        </td>
                                        <td>
                                            <?= $r['rt_nama'] ?>
                                        </td>
                                        <td>
                                            250
                                        </td>
                                        <td>
                                            250
                                        </td>
                                        <td class="text-right">
                                            <a href="<?= site_url('Rt/detail/') . $r['rt_id']; ?>" class="btn btn-info"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail</a>&nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('Rt/edit/') . $r['rt_id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                        </td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>