<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="<?= base_url(); ?>/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="<?= base_url('assets/img/') . $penduduk['pndk_foto']; ?>" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">
                            <?= $penduduk['pndk_fullname'] ?><span class="font-weight-light">, 20</span>
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
                        <h6 class="heading-small text-muted mb-4">Informasi Penduduk</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_nik'] ?></label>
                                    </div>
                                </div>
                                <div class="col-3">
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
                                <div class="col-3">
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
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Tempat Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_tmp_lahir'] ?>, <?= $penduduk['pndk_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Jenis Kelamin</label><br>
                                        <label class="form-control-label" for="input-username"><?= $penduduk['pndk_jk'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label><br>
                                        <label class="form-control-label" for="input-username">Pekanbaru</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username">01-01-2001</label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Informasi tambahan</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Agama</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($agama as $a) :
                                                if ($penduduk['agm_id'] == $a['agm_id']) { ?>
                                                    <?= $a['agm_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Golongan Darah</label><br>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Pendidikan</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($pendidikan as $r) :
                                                if ($penduduk['pnd_id'] == $r['pnd_id']) { ?>
                                                    <?= $r['pnd_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($pekerjaan as $r) :
                                                if ($penduduk['pkrj_id'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Status Keluarga</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($sts_hub_kel as $r) :
                                                if ($penduduk['sts_hub_id'] == $r['sts_hub_id']) { ?>
                                                    <?= $r['sts_hub_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                        </label>
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
                                        <label class="form-control-label" for="input-first-name">Status Pernikahan</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($sts_pernikahan as $r) :
                                                if ($penduduk['stspnkn_id'] == $r['stspnkn_id']) { ?>
                                                    <?= $r['stspnkn_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kewarganegaraan</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($kewarganegaraan as $r) :
                                                if ($penduduk['kwgn_id'] == $r['kwgn_id']) { ?>
                                                    <?= $r['kwgn_ket']; ?>
                                                <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Jenis Asuransi</label><br>
                                        <label class="form-control-label" for="input-username">
                                        <?php foreach ($jns_asuransi as $r) :
                                                if ($penduduk['jnsasn_id'] == $r['jnsasn_id']) { ?>
                                                    <?= $r['jnsasn_ket']; ?>
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