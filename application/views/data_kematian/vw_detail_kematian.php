<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail Data Kematian </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informasi Kematian</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['desa_kelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kelurahan/Desa</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kabupaten_kota'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Kepala Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_kepala_keluarga'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kepala Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_nokk'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Jenazah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-tel-input" class="form-control-label">Jenis Kelamin</label><br>
                                    <label class="form-control-label" for="input-username"><?= $kematian['kmtn_jk'] ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['kmtn_tgl_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_tmpt_lahir'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Agama</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($agama as $r) :
                                                if ($kematian['kmtn_agama'] == $r['agm_id']) { ?>
                                                    <?= $r['agm_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['kmtn_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Anak ke</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_anak_ke'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Kematian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_tgl_mati'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="form-control-label">Pukul</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_pkl_mati'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Sebab Kematian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_sebab_mati'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Kematian</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_tempat_mati'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Yang menerangkan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_yg_menerangkan'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Ayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_tanggal_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['kmtn_ayah_tanggal_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['kmtn_ayah_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ayah_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Ibu</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_tanggal_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['kmtn_ibu_tanggal_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['kmtn_ibu_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['kmtn_ibu_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Pelapor</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['plpr_tgl_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['plpr_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['plpr_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Sanksi I</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['sks1_tgl_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['sks1_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks1_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Sanksi II</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kematian['sks2_tgl_lahir']), "Y");
                                            $thnNow = date("Y");
                                            $age = $thnNow - $thn;
                                            echo $age;
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kematian['sks2_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kematian['sks2_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>