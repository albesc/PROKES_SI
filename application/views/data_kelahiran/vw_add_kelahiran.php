<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tambah Data Kelahiran </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Kelahiran/upload'); ?>" method="post" enctype="multipart/form-data">
                        <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                        <h6 class="heading-small text-muted mb-4"><br>Informasi Kelahiran</h6>
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
                                        <label class="form-control-label" for="input-first-name">Nama Kepala Keluarga</label>
                                        <input type="text" name="klhrn_kepala_keluarga" class="form-control" placeholder="Nama Kepala Keluarga">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Nomor Kartu Keluarga</label>
                                        <input type="text" name="klhrn_nokk" class="form-control" placeholder="No Kartu Keluarga">
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
                                        <input type="text" name="klhrn_nama" class="form-control" placeholder="Nama">
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
                                            <option value="1">RS/RB</option>
                                            <option value="2">Puskesmas</option>
                                            <option value="3">Polindes</option>
                                            <option value="4">Rumah</option>
                                            <option value="5">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Tempat Kelahiran</label>
                                        <input type="text" name="klhrn_tmpt_kelahiran" class="form-control" placeholder="Tempat Kelahiran">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Kelahiran</label>
                                        <input class="form-control" type="date" name="klhrn_tgl_lahir">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-time-input" class="form-control-label">Pukul</label>
                                        <input class="form-control" type="time" name="klhrn_pkl_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_jns">Jenis Kelahiran</label>
                                        <select class="form-control" name="klhrn_jns_klmn_detail">
                                            <option value="1">Tunggal</option>
                                            <option value="2">kembar 2</option>
                                            <option value="3">Kembar 3</option>
                                            <option value="4">Kembar 4</option>
                                            <option value="5">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kelahiran ke</label>
                                        <input type="number" name="klhrn_ke" class="form-control" placeholder="Kelahiran ke">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_penolong">Penolong Kelahiran</label>
                                        <select class="form-control" name="klhrn_penolong">
                                            <option value="1">Dokter</option>
                                            <option value="2">Bidan/Perawat</option>
                                            <option value="3">Dukun</option>
                                            <option value="4">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Berat</label>
                                        <input type="number" name="klhrn_berat" class="form-control" placeholder="Kg" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Panjang Bayi</label>
                                        <input type="number" name="klhrn_panjang" class="form-control" placeholder="Cm" >
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
                                        <input type="text" name="klhrn_ibu_nik" class=" form-control" placeholder="NIK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="klhrn_ibu_nama" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="klhrn_ibu_tgl_lahir">
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
                                        <input type="text" name="klhrn_ibu_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="klhrn_ibu_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="klhrn_ibu_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="klhrn_ibu_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="klhrn_ibu_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_kewarganegaraan">Kewarganegaraan</label>
                                        <select class="form-control" name="klhrn_ibu_kewarganegaraan">
                                            <option value="1">WNI</option>
                                            <option value="2">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ibu_kebangsaan">Kebangsaan</label>
                                        <input type="text" name="klhrn_ibu_kebangsaan" class="form-control" placeholder="kebangsaan" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="klhrn_ibu_tgl_catat_kawin" class="form-control-label">Tanggal Pencatatan Perkawinan</label>
                                        <input class="form-control" type="date" name="klhrn_ibu_tgl_catat_kawin">
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
                                        <input type="text" name="klhrn_ayah_nik" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="klhrn_ayah_nama" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="klhrn_ayah_tgl_lahir">
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
                                        <input type="text" name="klhrn_ayah_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_provinsi">Provinsi</label>
                                        <input type="text" name="klhrn_ayah_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_kabupatenkota">Kabupaten / Kota</label>
                                        <input type="text" name="klhrn_ayah_alamat_kabupatenkota" class="form-control" placeholder="kabupaten / kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_kecamatan">Kecamatan</label>
                                        <input type="text" name="klhrn_ayah_alamat_kecamatan" class="form-control" placeholder="kecamatan">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_alamat_desakelurahan">Desa / Lurah</label>
                                        <input type="text" name="klhrn_ayah_alamat_desakelurahan" class="form-control" placeholder="desa / lurah">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_kewarganegaraan">Kewarganegaraan</label>
                                        <select class="form-control" name="klhrn_ayah_kewarganegaraan">
                                            <option value="1">WNI</option>
                                            <option value="2">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="klhrn_ayah_kebangsaan">Kebangsaan</label>
                                        <input type="text" name="klhrn_ayah_kebangsaan" class="form-control" placeholder="kebangsaan" >
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
                                        <input type="text" name="plpr_nik" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-control-label" for="input-text">Nama</label>
                                    <input type="text" name="plpr_nama" class="form-control" placeholder="nama" >
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="plpr_umur">
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
                                        <input type="text" name="plpr_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="plpr_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
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
                                        <input type="text" name="sks1_nik" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="sks1_nama" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="sks1_umur">
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
                                        <input type="text" name="sks1_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="sks1_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
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
                                        <input type="text" name="sks2_nik" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="sks2_nama" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" name="sks2_umur">
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
                                        <input type="text" name="sks2_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="sks2_alamat_provinsi" class="form-control" placeholder="provinsi">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
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