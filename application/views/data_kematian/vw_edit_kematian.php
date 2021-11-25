<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Data Kematian </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kematian/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="kmtn_id" class="form-control" value="<?= $kematian['kmtn_id'] ?>">
                        <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                        <h6 class="heading-small text-muted mb-4"><br>Informasi Kematian</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan" class="form-control" placeholder="Desa / Kelurahan" value="<?= $kematian['desa_kelurahan']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?= $kematian['kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" placeholder="Kabupaten / Kota" value="<?= $kematian['kabupaten_kota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nama Kepala Keluarga</label>
                                        <input type="text" id="input-username" name="kmtn_kepala_keluarga" class="form-control" placeholder="Kepala Keluarga" value="<?= $kematian['kmtn_kepala_keluarga'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kepala Keluarga</label>
                                        <input type="text" id="input-username" name="kmtn_nokk" class="form-control" placeholder="NKK" value="<?= $kematian['kmtn_nokk'] ?>">
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
                                        <input type="text" id="input-text" name="kmtn_nik" class="form-control" placeholder="nik" value="<?= $kematian['kmtn_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" name="kmtn_nama" class="form-control" placeholder="nama" value="<?= $kematian['kmtn_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="kmtn_jk" class="form-control-label">Jenis Kelamin</label><br>
                                    <input type="radio" id="html" name="kmtn_jk" value="Laki-Laki" <?php if ($kematian['kmtn_jk'] == "Laki-Laki") { ?> checked <?php } ?>>
                                    <label for="html">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="css" name="kmtn_jk" value="Perempuan" <?php if ($kematian['kmtn_jk'] == "Perempuan") { ?> checked <?php } ?>>
                                    <label for="css">Perempuan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_tgl_lahir" value="<?= $kematian['kmtn_tgl_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="tempat lahir" name="kmtn_tmpt_lahir" value="<?= $kematian['kmtn_tmpt_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_agama">Agama</label>
                                        <select class="form-control" name="kmtn_agama">
                                            <?php foreach ($agama as $r) : ?>
                                                <option value="<?= $r['agm_id']; ?>" <?php if ($kematian['kmtn_agama'] == $r['agm_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['agm_ket']; ?></option>
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
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['kmtn_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_alamat">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_alamat" value="<?= $kematian['kmtn_alamat'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['kmtn_provinsi'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['kmtn_kabupatenkota'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_kecamatan">Kecamatan</label>
                                        <input type="text" name="kmtn_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['kmtn_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_desakelurahan">Desa / Lurah</label>
                                        <input type="text" name="kmtn_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['kmtn_desakelurahan'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_anak_ke">Anak ke</label>
                                        <input type="number" id="input-first-name" name="kmtn_anak_ke" class="form-control" placeholder="1" value="<?= $kematian['kmtn_anak_ke'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="kmtn_tgl_mati">Tanggal Kematian</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_tgl_mati" value="<?= $kematian['kmtn_tgl_mati'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="kmtn_pkl_mati">Pukul</label>
                                        <input class="form-control" type="time" value="Pukul" id="example-time-input" name="kmtn_pkl_mati" value="<?= $kematian['kmtn_pkl_mati'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_sebab_mati">Sebab Kematian</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kmtn_sebab_mati">
                                            <option value="Sakit biasa / tua" <?php if ($kematian['kmtn_sebab_mati'] == "Sakit biasa / tua") { ?> selected <?php } ?>>Sakit biasa / tua</option>
                                            <option value="Wabah Penyakit" <?php if ($kematian['kmtn_sebab_mati'] == "Wabah Penyakit") { ?> selected <?php } ?>>Wabah Penyakit</option>
                                            <option value="Kecelakaan" <?php if ($kematian['kmtn_sebab_mati'] == "Kecelakaan") { ?> selected <?php } ?>>Kecelakaan</option>
                                            <option value="Kriminalitas" <?php if ($kematian['kmtn_sebab_mati'] == "Kriminalitas") { ?> selected <?php } ?>>Kriminalitas</option>
                                            <option value="Bunuh Diri" <?php if ($kematian['kmtn_sebab_mati'] == "Bunuh Diri") { ?> selected <?php } ?>>Bunuh Diri</option>
                                            <option value="Lainnya" <?php if ($kematian['kmtn_sebab_mati'] == "Lainnya") { ?> selected <?php } ?>>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_tempat_mati">Tempat Kematian</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="tempat kematian" name="kmtn_tempat_mati" value="<?= $kematian['kmtn_tempat_mati'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_yg_menerangkan">Yang menerangkan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kmtn_yg_menerangkan">
                                            <option value="1" <?php if ($kematian['kmtn_yg_menerangkan'] == "1") { ?> selected <?php } ?>>Dokter</option>
                                            <option value="2" <?php if ($kematian['kmtn_yg_menerangkan'] == "2") { ?> selected <?php } ?>>Tenaga Kesehatan</option>
                                            <option value="3" <?php if ($kematian['kmtn_yg_menerangkan'] == "3") { ?> selected <?php } ?>>Lainnya</option>
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
                                        <label class="form-control-label" for="kmtn_ayah_nik">NIK</label>
                                        <input type="text" id="input-username" name="kmtn_ayah_nik" class="form-control" placeholder="NIK" value="<?= $kematian['kmtn_ayah_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ayah_nama">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="kmtn_ayah_nama" value="<?= $kematian['kmtn_ayah_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_ayah_tanggal_lahir" value="<?= $kematian['kmtn_ayah_tanggal_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ayah_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="kmtn_ayah_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['kmtn_ayah_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ayah_alamat">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_ayah_alamat" value="<?= $kematian['kmtn_ayah_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_ayah_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['kmtn_ayah_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_ayah_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['kmtn_ayah_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kmtn_ayah_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['kmtn_ayah_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="kmtn_ayah_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['kmtn_ayah_alamat_desakelurahan'] ?>">
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
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="kmtn_ibu_nik" value="<?= $kematian['kmtn_ibu_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="kmtn_ibu_nama" value="<?= $kematian['kmtn_ibu_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="kmtn_ibu_tanggal_lahir" value="<?= $kematian['kmtn_ibu_tanggal_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="kmtn_ibu_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['kmtn_ibu_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="kmtn_ibu_alamat" value="<?= $kematian['kmtn_ibu_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="kmtn_ibu_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['kmtn_ibu_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="kmtn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="kmtn_ibu_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['kmtn_ibu_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kmtn_ibu_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['kmtn_ibu_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="kmtn_ibu_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['kmtn_ibu_alamat_desakelurahan'] ?>">
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
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="plpr_nik" value="<?= $kematian['plpr_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="plpr_fullname" value="<?= $kematian['plpr_fullname'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="plpr_tgl_lahir" value="<?= $kematian['plpr_tgl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="plpr_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['plpr_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="plpr_alamat" value="<?= $kematian['plpr_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="plpr_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['plpr_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="plpr_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="plpr_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['plpr_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="plpr_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['plpr_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="plpr_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['plpr_alamat_desakelurahan'] ?>">
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
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="sks1_nik" value="<?= $kematian['sks1_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="sks1_fullname" value="<?= $kematian['sks1_fullname'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="sks1_tgl_lahir" value="<?= $kematian['sks1_tgl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks1_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="sks1_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['sks1_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="sks1_alamat" value="<?= $kematian['sks1_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="sks1_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['sks1_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="sks1_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['sks1_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks1_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['sks1_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks1_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['sks1_alamat_desakelurahan'] ?>">
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
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" name="sks2_nik" value="<?= $kematian['sks2_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" id="input-text" class="form-control" placeholder="nama" name="sks2_fullname" value="<?= $kematian['sks2_fullname'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input" name="sks2_tgl_lahir" value="<?= $kematian['sks2_tgl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="sks2_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($kematian['sks2_pekerjaan'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" name="sks2_alamat" value="<?= $kematian['sks2_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="sks2_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kematian['sks2_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sks2_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="sks2_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kematian['sks2_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks2_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kematian['sks2_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks2_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kematian['sks2_alamat_desakelurahan'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>