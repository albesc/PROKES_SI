<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail Data Kelahiran </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informasi Kelahiran</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['desa_kelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kelurahan/Desa</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['kabupaten_kota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Kepala Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_kepala_keluarga'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kartu Keluarga</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_nokk'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Bayi / Anak</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-tel-input" class="form-control-label">Jenis Kelamin</label><br>
                                    <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_jk'] ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Tempat Dilahirkan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            if ($kelahiran['klhrn_tmpt_dilahirkan'] == 1) {
                                                echo "RS/RB";
                                            } elseif ($kelahiran['klhrn_tmpt_dilahirkan'] == 2) {
                                                echo "Puskesmas";
                                            } elseif ($kelahiran['klhrn_tmpt_dilahirkan'] == 3) {
                                                echo "Polindes";
                                            } elseif ($kelahiran['klhrn_tmpt_dilahirkan'] == 4) {
                                                echo "Rumah";
                                            } elseif ($kelahiran['klhrn_tmpt_dilahirkan'] == 5) {
                                                echo "Lainnya";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_tmpt_kelahiran'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Hari Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $timestamp = strtotime($kelahiran['klhrn_tgl_lahir']);
                                            $day = date('D', $timestamp);
                                            if ($day == "Sun") {
                                                echo "Minggu";
                                            } elseif ($day == "Mon") {
                                                echo "Senin";
                                            } elseif ($day == "Tue") {
                                                echo "Selara";
                                            } elseif ($day == "Wed") {
                                                echo "Rabu";
                                            } elseif ($day == "Thu") {
                                                echo "Kamis";
                                            } elseif ($day == "Fri") {
                                                echo "Jumat";
                                            } elseif ($day == "Sat") {
                                                echo "Sabtu";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="form-control-label">Pukul</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_pkl_lahir'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Jenis Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            if ($kelahiran['klhrn_jns_klmn_detail'] == 1) {
                                                echo "Tunggal";
                                            } elseif ($kelahiran['klhrn_jns_klmn_detail'] == 2) {
                                                echo "Kembar 2";
                                            } elseif ($kelahiran['klhrn_jns_klmn_detail'] == 3) {
                                                echo "Kembar 3";
                                            } elseif ($kelahiran['klhrn_jns_klmn_detail'] == 4) {
                                                echo "Kembar 4";
                                            } elseif ($kelahiran['klhrn_jns_klmn_detail'] == 5) {
                                                echo "Lainnya";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kelahiran ke</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ke'] ?></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Penolong Kelahiran</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            if ($kelahiran['klhrn_penolong'] == 1) {
                                                echo "Dokter";
                                            } elseif ($kelahiran['klhrn_penolong'] == 2) {
                                                echo "Bidan/Perawat";
                                            } elseif ($kelahiran['klhrn_penolong'] == 3) {
                                                echo "Dukun";
                                            } elseif ($kelahiran['klhrn_penolong'] == 4) {
                                                echo "Lainnya";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Berat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_berat'] ?> Kg</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Panjang Bayi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_panjang'] ?> Cm</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Ibu</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kelahiran['klhrn_ibu_tgl_lahir']), "Y");
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
                                                if ($kelahiran['klhrn_ibu_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kewarganegaraan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            if ($kelahiran['klhrn_ibu_kewarganegaraan'] == 1) {
                                                echo "WNI";
                                            } elseif ($kelahiran['klhrn_ibu_kewarganegaraan'] == 2) {
                                                echo "WNA";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kebangsaan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_kebangsaan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Pencatatan Perkawinan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ibu_tgl_catat_kawin'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Ayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_nama'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_tgl_lahir'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            $thn = date_format(date_create($kelahiran['klhrn_ayah_tgl_lahir']), "Y");
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
                                                if ($kelahiran['klhrn_ayah_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kewarganegaraan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php
                                            if ($kelahiran['klhrn_ayah_kewarganegaraan'] == 1) {
                                                echo "WNI";
                                            } elseif ($kelahiran['klhrn_ayah_kewarganegaraan'] == 2) {
                                                echo "WNA";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kebangsaan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['klhrn_ayah_kebangsaan'] ?></label>
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
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_umur'] ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Jenis Kelamin</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_jk'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kelahiran['plpr_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['plpr_alamat_provinsi'] ?></label>
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
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_umur'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kelahiran['sks1_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks1_alamat_provinsi'] ?></label>
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
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_nik'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_fullname'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_umur'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label><br>
                                        <label class="form-control-label" for="input-username">
                                            <?php foreach ($pekerjaan as $r) :
                                                if ($kelahiran['sks2_pekerjaan'] == $r['pkrj_id']) { ?>
                                                    <?= $r['pkrj_ket']; ?>
                                            <?php }
                                            endforeach; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_alamat'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Desa Kelurahan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_alamat_desakelurahan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kab/Kota</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_alamat_kabupatenkota'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kecamatan</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_alamat_kecamatan'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label><br>
                                        <label class="form-control-label" for="input-username"><?= $kelahiran['sks2_alamat_provinsi'] ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>