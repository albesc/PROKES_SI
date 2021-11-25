<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail Data Pindah Domisili </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Data Daerah Asal</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nomor Kartu Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['no_kk'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama Kepala Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['nama_kepala_keluarga'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['alamat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">RW</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rw as $r) :
                                                if ($permohonanpindah['rw_asal'] == $r['rw_id']) { ?>
                                                    <?= $r['no_rw']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">RT</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rt as $r) :
                                                if ($permohonanpindah['rt_asal'] == $r['rt_id']) { ?>
                                                    <?= $r['no_rt']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Dusun / Kampung</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['dusun_asal'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['desa_kelurahan_asal'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['kab_kota_asal'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['kecamatan_asal'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['provinsi_asal'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK Pemohon</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['nik_pemohon'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['nama_lengkap'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Data Kepindahan</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Alasan Pindah</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['alasan_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['alamat_tujuan_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">RW</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rw as $r) :
                                                if ($permohonanpindah['rw_pindah'] == $r['rw_id']) { ?>
                                                    <?= $r['no_rw']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">RT</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rt as $r) :
                                                if ($permohonanpindah['rt_pindah'] == $r['rt_id']) { ?>
                                                    <?= $r['no_rt']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Dusun / Kampung</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['dusun_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['desa_kelurahan_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['kab_kota_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['kecamatan_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['provinsi_pindah'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Jenis Kepindahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['jns_kepindahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status KK Yang Tidak Pindah</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['stskk_tidak_pindah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status KK Yang Pindah</label><br>
                                        <label class="form-control-label" for="input-username"><?= $permohonanpindah['stskk_pindah'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Keluarga yang pindah</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <td scope="col" class="sort" data-sort="id">No</td>
                                            <td scope="col" class="sort" data-sort="nik">NIK Penduduk</td>
                                            <td scope="col" class="sort" data-sort="nama">Nama Penduduk</td>
                                            <td scope="col">Masa Berlaku KTP S/D</td>
                                            <td scope="col" class="sort" data-sort="asal">SHDK</td>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <?php
                                        $i = 1;
                                        foreach ($permohonanpindah as $p) {
                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm"><?= $i ?></span>
                                                    </div>
                                                </th>
                                                <td class="budget">
                                                    <?= $p['nik'] ?>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot mr-4">
                                                        <span class="status"><?= $p['nama'] ?></span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?= $p['masa_berlaku_ktp'] ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="completion mr-2"><?= $p['shdk'] ?></span>
                                                    </div>
                                                </td>
                                                <!-- <td class="text-right">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                </td> -->
                                            </tr>
                                        <?php $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>