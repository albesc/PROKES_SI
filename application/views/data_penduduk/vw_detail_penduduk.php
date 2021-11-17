<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="<?= base_url(); ?>/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="<?= base_url('assets/img/penduduk/') . $penduduk['pndk_foto']; ?>" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">
                            <?= $penduduk['pndk_fullname'] ?><span class="font-weight-light">, <?= $penduduk['pndk_umur'] ?></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i><?= $penduduk['pndk_alamat'] ?>
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
                            <h3 class="mb-0">Detail Penduduk </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Data Wilayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_provinsi'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kelurahan/Desa</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_desalurah'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Data Keluarga</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Kepala Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_namakk'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No. Kartu Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nokk'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Alamat Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_alamat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">RW</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rw as $r) :
                                                if ($penduduk['rw_id'] == $r['rw_id']) { ?>
                                                    <?= $r['no_rw']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">RT</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rt as $r) :
                                                if ($penduduk['rt_id'] == $r['rt_id']) { ?>
                                                    <?= $r['no_rt']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Dusun</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_desalurah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_kodepos'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tlpkeluarga'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Data Individu</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Lengkap</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nokk'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_alamat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">RW</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rw as $r) :
                                                if ($penduduk['rw_id'] == $r['rw_id']) { ?>
                                                    <?= $r['no_rw']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">RT</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rt as $r) :
                                                if ($penduduk['rt_id'] == $r['rt_id']) { ?>
                                                    <?= $r['no_rt']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Dusun</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_desalurah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_kodepos'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tlp'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No Paspor</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nopaspor'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tanggal Berakhir Paspor</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tgl_berakhir_paspor'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Jenis Kelamin</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_jk'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Tempat Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tmp_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Umur</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_umur'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Akta Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_akta_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">No Akta Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_noakta_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Golongan darah</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($gol_darah as $r) :
                                                if ($penduduk['goldr_id'] == $r['goldr_id']) { ?>
                                                    <?= $r['goldr_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Agama</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($agama as $r) :
                                                if ($penduduk['agm_id'] == $r['agm_id']) { ?>
                                                    <?= $r['agm_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Status Perkawinan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($sts_pernikahan as $r) :
                                                if ($penduduk['stspnkn_id'] == $r['stspnkn_id']) { ?>
                                                    <?= $r['stspnkn_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Akta Perkawinan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_akta_kawin'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">No Akta Perkawinan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_noakta_kawin'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Tanggal Perkawinan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tgl_kawin'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Akta Perceraian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_akta_cerai'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">No Akta Perceraian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_noakta_cerai'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Tanggal Perceraian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tgl_cerai'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Status Hubungan dalam Keluarga</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($sts_hub_kel as $r) :
                                                if ($penduduk['sts_hub_id'] == $r['sts_hub_id']) { ?>
                                                    <?= $r['sts_hub_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Kelainan Fisik dan Mental</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_kelainan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Penyandang Cacat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_cacat'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Pendidikan Terakhir</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pendidikan as $r) :
                                                if ($penduduk['pnd_id'] == $r['pnd_id']) { ?>
                                                    <?= $r['pnd_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($penduduk['pkrj_id'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Data Orang Tua</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">NIK Ayah</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nik_ayah'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama Lengkap Ayah</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nama_ayah'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">NIK Ibu</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nik_ibu'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama Lengkap Ibu</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nama_ibu'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Status</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Ketua RT</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rt as $r) :
                                                if ($penduduk['rt_id'] == $r['rt_id']) { ?>
                                                    <?= $r['rt_nama']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Ketua RW</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($rw as $r) :
                                                if ($penduduk['rw_id'] == $r['rw_id']) { ?>
                                                    <?= $r['rw_nama']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>