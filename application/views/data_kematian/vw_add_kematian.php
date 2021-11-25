<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tambah Data Kematian </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kematian/upload'); ?>" method="post" enctype="multipart/form-data">
                        <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                        <h6 class="heading-small text-muted mb-4"><br>Informasi Kematian</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan" class="form-control" placeholder="Desa / Kelurahan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" placeholder="Kabupaten / Kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Kepala Keluarga</label>
                                        <input type="text" id="input-username" name="kmtn_kepala_keluarga" class="form-control" placeholder="Kepala Keluarga">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kepala Keluarga</label>
                                        <input type="text" id="input-username" name="kmtn_nokk" class="form-control" placeholder="NKK">
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
                                        <label class="form-control-label" for="input-text">NIK</label>
                                        <input type="text" id="input-text" name="kmtn_nik" class="form-control" placeholder="nik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" name="kmtn_nama" class="form-control" placeholder="nama">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="kmtn_jk" class="form-control-label">Jenis Kelamin</label><br>
                                    <input type="radio" id="html" name="kmtn_jk" value="Laki-Laki">
                                    <label for="html">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="css" name="kmtn_jk" value="Perempuan">
                                    <label for="css">Perempuan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_tgl_lahir">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="tempat lahir" name="kmtn_tmpt_lahir">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_agama">Agama</label>
                                        <select class="form-control" name="kmtn_agama">
                                            <?php foreach ($agama as $r) : ?>
                                                <option value="<?= $r['agm_id']; ?>"><?= $r['agm_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="kmtn_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_alamat">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_provinsi" class="form-control" placeholder="provinsi" name="kmtn_provinsi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_kecamatan">Kecamatan</label>
                                        <input type="text" name="kmtn_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_desakelurahan">Desa / Lurah</label>
                                        <input type="text" name="kmtn_desakelurahan" class="form-control" placeholder="desa / lurah">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_anak_ke">Anak ke</label>
                                        <input type="number" id="input-first-name" name="kmtn_anak_ke" class="form-control" placeholder="Anak ke">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Kematian</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_tgl_mati">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="form-control-label">Pukul</label>
                                        <input class="form-control" type="time" value="Pukul" id="example-time-input" name="kmtn_pkl_mati">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_sebab_mati">Sebab Kematian</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kmtn_sebab_mati">
                                            <option value="Sakit biasa / tua">Sakit biasa / tua</option>
                                            <option value="Wabah Penyakit">Wabah Penyakit</option>
                                            <option value="Kecelakaan">Kecelakaan</option>
                                            <option value="Kriminalitas">Kriminalitas</option>
                                            <option value="Bunuh Diri">Bunuh Diri</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Kematian</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="tempat kematian" name="kmtn_tempat_mati">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_yg_menerangkan">Yang menerangkan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kmtn_yg_menerangkan">
                                            <option value="1">Dokter</option>
                                            <option value="2">Tenaga Kesehatan</option>
                                            <option value="3">Lainnya</option>
                                        </select>
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" name="kmtn_ayah_nik" class="form-control" placeholder="NIK">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="kmtn_ayah_nama">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_ayah_tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ayah_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="kmtn_ayah_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_ayah_alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_ayah_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_ayah_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kmtn_ayah_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="kmtn_ayah_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="kmtn_ibu_nik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="kmtn_ibu_nama">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_ibu_tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="kmtn_ibu_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_ibu_alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_ibu_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_ibu_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kmtn_ibu_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="kmtn_ibu_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="plpr_nik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="plpr_fullname">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="plpr_tgl_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="plpr_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="plpr_alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="plpr_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="plpr_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="plpr_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="plpr_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="sks1_nik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="sks1_fullname">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="sks1_tgl_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks1_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="sks1_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="sks1_alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="sks1_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="sks1_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks1_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks1_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="sks2_nik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="sks2_fullname">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="sks2_tgl_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="sks2_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="sks2_alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="sks2_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="sks2_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks2_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks2_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>