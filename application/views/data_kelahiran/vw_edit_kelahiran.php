<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Data Kelahiran </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kelahiran/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="klhrn_id" class="form-control" value="<?= $kelahiran['klhrn_id'] ?>">
                        <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                        <h6 class="heading-small text-muted mb-4"><br>Informasi Kelahiran</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan" class="form-control" placeholder="Desa / Kelurahan" value="<?= $kelahiran['desa_kelurahan']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?= $kelahiran['kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" placeholder="Kabupaten / Kota" value="<?= $kelahiran['kabupaten_kota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Kepala Keluarga</label>
                                        <input type="text" name="klhrn_kepala_keluarga" class="form-control" placeholder="Nama Kepala Keluarga" value="<?= $kelahiran['klhrn_kepala_keluarga'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kartu Keluarga</label>
                                        <input type="text" name="klhrn_nokk" class="form-control" placeholder="No Kartu Keluarga" value="<?= $kelahiran['klhrn_nokk'] ?>">
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
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="klhrn_nama" class="form-control" placeholder="Nama" value="<?= $kelahiran['klhrn_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="klhrn_jk" class="form-control-label">Jenis Kelamin</label><br>
                                    <input type="radio" id="html" name="klhrn_jk" value="Laki-Laki">
                                    <label for="html">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="css" name="klhrn_jk" value="Perempuan">
                                    <label for="css">Perempuan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_tmpt_dilahirkan">Tempat Dilahirkan</label>
                                        <select class="form-control" name="klhrn_tmpt_dilahirkan">
                                            <option value="RS/RB">RS/RB</option>
                                            <option value="Puskesmas">Puskesmas</option>
                                            <option value="Polindes">Polindes</option>
                                            <option value="Rumah">Rumah</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Tempat Kelahiran</label>
                                        <input type="text" name="klhrn_tmpt_kelahiran" class="form-control" placeholder="Tempat Kelahiran" value="<?= $kelahiran['klhrn_tmpt_kelahiran'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Kelahiran</label>
                                        <input class="form-control" type="date" name="klhrn_tgl_lahir" value="<?= $kelahiran['klhrn_tgl_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="form-control-label">Pukul</label>
                                        <input class="form-control" type="time" name="klhrn_pkl_lahir" value="<?= $kelahiran['klhrn_pkl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_jns">Jenis Kelahiran</label>
                                        <select class="form-control" name="klhrn_jns">
                                            <option>Tunggal</option>
                                            <option>kembar 2</option>
                                            <option>Kembar 3</option>
                                            <option>Kembar 4</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kelahiran ke</label>
                                        <input type="text" name="klhrn_ke" class="form-control" placeholder="Kelahiran ke" value="<?= $kelahiran['klhrn_ke'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_penolong">Penolong Kelahiran</label>
                                        <select class="form-control" name="klhrn_penolong">
                                            <option>Dokter</option>
                                            <option>Bidan/Perawat</option>
                                            <option>Dukun</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Berat</label>
                                        <input type="text" name="klhrn_berat" class="form-control" placeholder="Kg" value="<?= $kelahiran['klhrn_berat'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Panjang Bayi</label>
                                        <input type="text" name="klhrn_panjang" class="form-control" placeholder="Cm" value="<?= $kelahiran['klhrn_panjang'] ?>">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" name="klhrn_ibu_nik" class=" form-control" placeholder="NIK" value="<?= $kelahiran['klhrn_ibu_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="klhrn_ibu_nama" class="form-control" placeholder="nama" value="<?= $kelahiran['klhrn_ibu_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="klhrn_ibu_tgl_lahir" value="<?= $kelahiran['klhrn_ibu_tgl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="klhrn_ibu_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat">Alamat</label>
                                        <input type="text" name="klhrn_ibu_alamat" class="form-control" placeholder="alamat" value="<?= $kelahiran['klhrn_ibu_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="klhrn_ibu_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kelahiran['klhrn_ibu_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="klhrn_ibu_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kelahiran['klhrn_ibu_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="klhrn_ibu_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kelahiran['klhrn_ibu_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="klhrn_ibu_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kelahiran['klhrn_ibu_alamat_desakelurahan'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_kewarganegaraan">Kewarganegaraan</label>
                                        <select class="form-control" name="klhrn_ibu_kewarganegaraan">
                                            <option>WNI</option>
                                            <option>WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_kebangsaan">Kebangsaan</label>
                                        <input type="text" name="klhrn_ibu_kebangsaan" class="form-control" placeholder="kebangsaan" value="<?= $kelahiran['klhrn_ibu_kebangsaan'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="klhrn_ibu_tgl_catat_kawin" class="form-control-label">Tanggal Pencatatan Perkawinan</label>
                                        <input class="form-control" type="date" name="klhrn_ibu_tgl_catat_kawin" value="<?= $kelahiran['klhrn_ibu_tgl_catat_kawin'] ?>">
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
                                        <label class="form-control-label" for="klhrn_ayah_nik">NIK</label>
                                        <input type="text" name="klhrn_ayah_nik" class="form-control" placeholder="NIK" value="<?= $kelahiran['klhrn_ayah_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="klhrn_ayah_nama" class="form-control" placeholder="nama" value="<?= $kelahiran['klhrn_ayah_nama'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="klhrn_ayah_tgl_lahir" value="<?= $kelahiran['klhrn_ayah_tgl_lahir'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_pekerjaan">Pekerjaan</label>
                                        <select class="form-control" name="klhrn_ayah_pekerjaan">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat">Alamat</label>
                                        <input type="text" name="klhrn_ayah_alamat" class="form-control" placeholder="alamat" value="<?= $kelahiran['klhrn_ayah_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="klhrn_ayah_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kelahiran['klhrn_ayah_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="klhrn_ayah_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kelahiran['klhrn_ayah_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_kecamatan">Kecamatan</label>
                                        <input type="text" name="klhrn_ayah_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kelahiran['klhrn_ayah_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_desakelurahan">Desa / Lurah</label>
                                        <input type="text" name="klhrn_ayah_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kelahiran['klhrn_ayah_alamat_desakelurahan'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_kewarganegaraan">Kewarganegaraan</label>
                                        <select class="form-control" name="klhrn_ayah_kewarganegaraan">
                                            <option>WNI</option>
                                            <option>WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_kebangsaan">Kebangsaan</label>
                                        <input type="text" name="klhrn_ayah_kebangsaan" class="form-control" placeholder="kebangsaan" value="<?= $kelahiran['klhrn_ayah_kebangsaan'] ?>">
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
                                        <input type="text" name="plpr_nik" class="form-control" placeholder="NIK" value="<?= $kelahiran['plpr_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-control-label" for="input-text">Nama</label>
                                    <input type="text" name="plpr_fullname" class="form-control" placeholder="nama" value="<?= $kelahiran['plpr_fullname'] ?>">
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="plpr_umur" value="<?= $kelahiran['plpr_umur'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="klhrn_jk" class="form-control-label">Jenis Kelamin</label><br>
                                        <input type="radio" id="html" name="klhrn_jk" value="Laki-Laki">
                                        <label for="html">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="klhrn_jk" value="Perempuan">
                                        <label for="css">Perempuan</label>
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
                                        <input type="text" name="plpr_alamat" class="form-control" placeholder="alamat" value="<?= $kelahiran['plpr_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="plpr_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kelahiran['plpr_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" name="plpr_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kelahiran['plpr_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="plpr_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kelahiran['plpr_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="plpr_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kelahiran['plpr_alamat_desakelurahan'] ?>">
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
                                        <input type="text" name="sks1_nik" class="form-control" placeholder="NIK" value="<?= $kelahiran['sks1_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="sks1_fullname" class="form-control" placeholder="nama" value="<?= $kelahiran['sks1_fullname'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="sks1_umur" value="<?= $kelahiran['sks1_umur'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
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
                                        <input type="text" name="sks1_alamat" class="form-control" placeholder="alamat" value="<?= $kelahiran['sks1_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="sks1_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kelahiran['sks1_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" name="sks1_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kelahiran['sks1_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks1_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kelahiran['sks1_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks1_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kelahiran['sks1_alamat_desakelurahan'] ?>">
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
                                        <input type="text" name="sks2_nik" class="form-control" placeholder="NIK" value="<?= $kelahiran['sks2_nik'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="sks2_fullname" class="form-control" placeholder="nama" value="<?= $kelahiran['sks2_fullname'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="sks2_umur" value="<?= $kelahiran['sks2_umur'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
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
                                        <input type="text" name="sks2_alamat" class="form-control" placeholder="alamat" value="<?= $kelahiran['sks2_alamat'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="sks2_alamat_provinsi" class="form-control" placeholder="provinsi" value="<?= $kelahiran['sks2_alamat_provinsi'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" name="sks2_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $kelahiran['sks2_alamat_kabupatenkota'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="sks2_alamat_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $kelahiran['sks2_alamat_kecamatan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="sks2_alamat_desakelurahan" class="form-control" placeholder="desa / lurah" value="<?= $kelahiran['sks2_alamat_desakelurahan'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>