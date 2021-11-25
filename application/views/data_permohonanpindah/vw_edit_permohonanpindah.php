<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Data Permohonan Pindah</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Permohonanpindah/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="prmhn_id" class="form-control" value="<?= $permohonanpindah['prmhn_id'] ?>">
                        <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                        <h6 class="heading-small text-muted mb-4"><br>Data Daerah Asal</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nomor Kartu Keluarga</label>
                                        <input type="text" name="no_kk" class="form-control" placeholder="NKK" value="<?= $permohonanpindah['no_kk']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama Kepala Keluarga</label>
                                        <input type="text" name="nama_kepala_keluarga" class="form-control" placeholder="nama" value="<?= $permohonanpindah['nama_kepala_keluarga']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?= $permohonanpindah['alamat']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RT Asal</label>
                                        <input type="number" name="rt_asal" class="form-control" placeholder="rt" value="<?= $permohonanpindah['rt_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RW Asal</label>
                                        <input type="number" name="rw_asal" class="form-control" placeholder="rw" value="<?= $permohonanpindah['rw_asal']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Dusun / Kampung</label>
                                        <input type="text" name="dusun_asal" class="form-control" placeholder="Dusun / Kampung" value="<?= $permohonanpindah['dusun_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan_asal" class="form-control" placeholder="Desa / Kelurahan" value="<?= $permohonanpindah['desa_kelurahan_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan_asal" class="form-control" placeholder="Kecamatan" value="<?= $permohonanpindah['kecamatan_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota_asal" class="form-control" placeholder="Kabupaten / Kota" value="<?= $permohonanpindah['kab_kota_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi</label>
                                        <input type="text" name="provinsi_asal" class="form-control" placeholder="Provinsi" value="<?= $permohonanpindah['provinsi_asal']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label>
                                        <input type="text" name="kode_pos_asal" class="form-control" placeholder="Kode pos" value="<?= $permohonanpindah['kode_pos_asal']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label>
                                        <input type="text" name="telepon_asal" class="form-control" placeholder="Telepon" value="<?= $permohonanpindah['telepon_asal']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK Pemohon</label>
                                        <input type="text" name="nik_pemohon" class="form-control" placeholder="NIK" value="<?= $permohonanpindah['nik_pemohon']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control" placeholder="nama" value="<?= $permohonanpindah['nama_lengkap']; ?>">
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
                                        <label class="form-control-label" for="input-username">Alasan Pindah</label>
                                        <input type="text" name="alasan_pindah" class="form-control" placeholder="pekerjaan" value="<?= $permohonanpindah['alasan_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="alamat_tujuan_pindah" class="form-control" placeholder="alamat" value="<?= $permohonanpindah['alamat_tujuan_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RT Tujuan</label>
                                        <input type="number" name="rt_pindah" class="form-control" placeholder="rt" value="<?= $permohonanpindah['rw_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RW Tujuan</label>
                                        <input type="number" name="rw_pindah" class="form-control" placeholder="rw" value="<?= $permohonanpindah['rw_pindah']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Dusun / Kampung</label>
                                        <input type="text" name="dusun_pindah" class="form-control" placeholder="Dusun / Kampung" value="<?= $permohonanpindah['dusun_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan_pindah" class="form-control" placeholder="Desa / Kelurahan" value="<?= $permohonanpindah['desa_kelurahan_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan_pindah" class="form-control" placeholder="Kecamatan" value="<?= $permohonanpindah['kecamatan_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota_pindah" class="form-control" placeholder="Kabupaten / Kota" value="<?= $permohonanpindah['kab_kota_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi</label>
                                        <input type="text" name="provinsi_pindah" class="form-control" placeholder="Provinsi" value="<?= $permohonanpindah['provinsi_pindah']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label>
                                        <input type="text" name="kode_pos_pindah" class="form-control" placeholder="Kode pos" value="<?= $permohonanpindah['kode_pos_pindah']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label>
                                        <input type="text" name="telepon_pindah" class="form-control" placeholder="Telepon" value="<?= $permohonanpindah['telepon_pindah']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="jns_kepindahan">Jenis Kepindahan</label>
                                        <select class="form-control" name="jns_kepindahan">
                                            <option value="Kep. Keluarga" <?php if ($permohonanpindah['jns_kepindahan'] == "Kep. Keluarga") { ?> selected <?php } ?>>Kep. Keluarga</option>
                                            <option value="Kep. Keluarga dan Seluruh Angg. Keluarga" <?php if ($permohonanpindah['Kep. Keluarga dan Seluruh Angg. Keluarga'] == "Sakit biasa / tua") { ?> selected <?php } ?>>Kep. Keluarga dan Seluruh Angg. Keluarga</option>
                                            <option value="Kep. Keluarga dan Sbg. Angg. Keluarga" <?php if ($permohonanpindah['Kep. Keluarga dan Sbg. Angg. Keluarga'] == "Sakit biasa / tua") { ?> selected <?php } ?>>Kep. Keluarga dan Sbg. Angg. Keluarga</option>
                                            <option value="Angg. Keluarga" <?php if ($permohonanpindah['jns_kepindahan'] == "Angg. Keluarga") { ?> selected <?php } ?>>Angg. Keluarga</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="stskk_tidak_pindah">Status KK Yang Tidak Pindah</label>
                                        <select class="form-control" name="stskk_tidak_pindah">
                                            <option value="Numpang KK" <?php if ($permohonanpindah['stskk_tidak_pindah'] == "Numpang KK") { ?> selected <?php } ?>>Numpang KK</option>
                                            <option value="Membuat KK Baru" <?php if ($permohonanpindah['stskk_tidak_pindah'] == "Membuat KK Baru") { ?> selected <?php } ?>>Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap" <?php if ($permohonanpindah['stskk_tidak_pindah'] == "Nomor KK Tetap") { ?> selected <?php } ?>>Nomor KK Tetap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="stskk_pindah">Status KK Yang Pindah</label>
                                        <select class="form-control" name="stskk_pindah">
                                            <option value="Numpang KK" <?php if ($permohonanpindah['stskk_pindah'] == "Numpang KK") { ?> selected <?php } ?>>Numpang KK</option>
                                            <option value="Membuat KK Baru" <?php if ($permohonanpindah['stskk_pindah'] == "Membuat KK Baru") { ?> selected <?php } ?>>Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap" <?php if ($permohonanpindah['stskk_pindah'] == "Nomor KK Tetap") { ?> selected <?php } ?>>Nomor KK Tetap</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Keluarga yang Pindah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">NIK</label>
                                        <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?= $permohonanpindah['nik']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $permohonanpindah['nama']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Masa Berlaku KTP S/D</label>
                                        <input type="text" name="masa_berlaku_ktm" class="form-control" placeholder="Masa Berlaku" value="<?= $permohonanpindah['masa_berlaku_ktp']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">SHDK</label>
                                        <input type="text" name="shdk" class="form-control" placeholder="SDHK" value="<?= $permohonanpindah['shdk']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>