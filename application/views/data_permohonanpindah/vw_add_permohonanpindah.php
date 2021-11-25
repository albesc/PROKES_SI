<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tambah Data Permohonan Pindah</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Permohonanpindah/upload'); ?>" method="post" enctype="multipart/form-data">
                        <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                        <h6 class="heading-small text-muted mb-4"><br>Data Daerah Asal</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nomor Kartu Keluarga</label>
                                        <input type="text" name="no_kk" class="form-control" placeholder="No KK">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama Kepala Keluarga</label>
                                        <input type="text" name="nama_kepala_keluarga" class="form-control" placeholder="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="alamat">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RT Asal</label>
                                        <input type="number" name="rt_asal" class="form-control" placeholder="rt">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RW Asal</label>
                                        <input type="number" name="rw_asal" class="form-control" placeholder="rw">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Dusun / Kampung</label>
                                        <input type="text" name="dusun_asal" class="form-control" placeholder="Dusun / Kampung">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan_asal" class="form-control" placeholder="Desa / Kelurahan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan_asal" class="form-control" placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota_asal" class="form-control" placeholder="Kabupaten / Kota">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi</label>
                                        <input type="text" name="provinsi_asal" class="form-control" placeholder="Provinsi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label>
                                        <input type="text" name="kode_pos_asal" class="form-control" placeholder="Kode pos">
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label>
                                        <input type="text" name="telepon_asal" class="form-control" placeholder="Telepon">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK Pemohon</label>
                                        <input type="text" name="nik_pemohon" class="form-control" placeholder="NIK">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Nama</label>
                                        <input type="text" name="nama_lengkap" class="form-control" placeholder="nama">
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
                                        <input type="text" name="alasan_pindah" class="form-control" placeholder="pekerjaan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="alamat_tujuan_pindah" class="form-control" placeholder="alamat">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RT Tujuan</label>
                                        <input type="number" name="rt_pindah" class="form-control" placeholder="rt">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">RW Tujuan</label>
                                        <input type="number" name="rw_pindah" class="form-control" placeholder="rw">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Dusun / Kampung</label>
                                        <input type="text" name="dusun_pindah" class="form-control" placeholder="Dusun / Kampung">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Kelurahan</label>
                                        <input type="text" name="desa_kelurahan_pindah" class="form-control" placeholder="Desa / Kelurahan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="kecamatan_pindah" class="form-control" placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota_pindah" class="form-control" placeholder="Kabupaten / Kota">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi</label>
                                        <input type="text" name="provinsi_pindah" class="form-control" placeholder="Provinsi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Kode Pos</label>
                                        <input type="text" name="kode_pos_pindah" class="form-control" placeholder="Kode pos">
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Telepon</label>
                                        <input type="text" name="telepon_pindah" class="form-control" placeholder="Telepon">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="jns_kepindahan">Jenis Kepindahan</label>
                                        <select class="form-control" name="jns_kepindahan">
                                            <option value="Kep. Keluarga">Kep. Keluarga</option>
                                            <option value="Kep. Keluarga dan Seluruh Angg. Keluarga">Kep. Keluarga dan Seluruh Angg. Keluarga</option>
                                            <option value="Kep. Keluarga dan Sbg. Angg. Keluarga">Kep. Keluarga dan Sbg. Angg. Keluarga</option>
                                            <option value="Angg. Keluarga">Angg. Keluarga</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="stskk_tidak_pindah">Status KK Yang Tidak Pindah</label>
                                        <select class="form-control" name="stskk_tidak_pindah">
                                            <option value="Numpang KK">Numpang KK</option>
                                            <option value="Membuat KK Baru">Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="stskk_pindah">Status KK Yang Pindah</label>
                                        <select class="form-control" name="stskk_pindah">
                                            <option value="Numpang KK">Numpang KK</option>
                                            <option value="Membuat KK Baru">Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
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
                                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Masa Berlaku KTP S/D</label>
                                        <input type="text" id="input-username" name="masa_berlaku_ktm" class="form-control" placeholder="Masa Berlaku">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">SHDK</label>
                                        <input type="text" id="input-username" name="shdk" class="form-control" placeholder="SDHK">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="table-responsive">
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
                                                <td class="text-right">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                </td>
                                            </tr>
                                        <?php $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>