<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tambah data penduduk </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Penduduk/upload'); ?>" method="post" enctype="multipart/form-data">
                        <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                        <h6 class="heading-small text-muted mb-4"><br>Data Wilayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="pndk_provinsi" class="form-control" placeholder="provinsi" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" name="pndk_kabupatenkota" class="form-control" placeholder="kabupaten / kota" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="pndk_kecamatan" class="form-control" placeholder="kecamatan" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="pndk_desalurah" class="form-control" placeholder="desa / lurah" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="heading-small text-muted mb-4">Data Keluarga</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama Kepala Keluarga</label>
                                        <input type="text" name="pndk_namakk" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_nokk">No KK Kepala Keluarga</label>
                                        <input type="text" name="pndk_nokk" class="form-control" placeholder="No KK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_alamat">Alamat Keluarga</label>
                                        <input type="text" name="pndk_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rw_id">RW</label>
                                        <select class="form-control" name="rw_id" onclick="document.getElementById('rt').style.display='block'">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>"><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group" id="rt" style="display:none">
                                        <label for="rt_id">RT</label>
                                        <select class="form-control" name="rt_id">
                                            <?php foreach ($rt as $r) : ?>
                                                <option value="<?= $r['rt_id']; ?>"><?= $r['no_rt']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Dusun</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="nama dusun" >
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_kodepos">Kode Pos</label>
                                        <input type="number" name="pndk_kodepos" class="form-control" placeholder="kode pos" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" name="pndk_tlpkeluarga" class="form-control" placeholder="No HP" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="heading-small text-muted mb-4">Data Individu</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_fullname">Nama</label>
                                        <input type="text" name="pndk_fullname" class="form-control" placeholder="nama" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_nik">NIK</label>
                                        <input type="text" name="pndk_nik" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_nokk">No KK</label>
                                        <input type="text" name="pndk_nokk" class="form-control" placeholder="No KK" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_alamat">Alamat</label>
                                        <input type="text" name="pndk_alamat" class="form-control" placeholder="alamat" >
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rw_id">RW</label>
                                        <select class="form-control" name="rw_id">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>"><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rt_id">RT</label>
                                        <select class="form-control" name="rt_id">
                                            <?php foreach ($rt as $r) : ?>
                                                <option value="<?= $r['rt_id']; ?>"><?= $r['no_rt']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Dusun</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="nama dusun" >
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_kodepos">Kode Pos</label>
                                        <input type="number" name="input-first-name" class="form-control" placeholder="kode pos" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" name="pndk_tlp" class="form-control" placeholder="No HP" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_nopaspor">No Paspor</label>
                                        <input type="text" name="pndk_nopaspor" class="form-control" placeholder="no paspor" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pndk_tgl_berakhir_paspor" class="form-control-label">Tanggal berakhir paspor</label>
                                        <input class="form-control" type="date" name="pndk_tgl_berakhir_paspor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="pndk_jk" class="form-control-label">Jenis Kelamin</label><br>
                                    <input type="radio" id="html" name="pndk_jk" value="LAKI - LAKI">
                                    <label for="html">LAKI - LAKI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="css" name="pndk_jk" value="PEREMPUAN">
                                    <label for="css">PEREMPUAN</label>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_tmp_lahir">Tempat Lahir</label>
                                        <input type="text" name="pndk_tmp_lahir" class="form-control" placeholder="tempat lahir" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pndk_tgl_lahir" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="pndk_tgl_lahir">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="0" name="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Kelahiran</label><br>
                                        <input type="radio" id="html" name="pndk_akta_lahir" value="Ada">
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_lahir" value="Tidak Ada">
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_noakta_lahir">No Akta Kelahiran</label>
                                        <input type="text" name="pndk_noakta_lahir" class="form-control" placeholder="no akta kelahiran" >
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="goldr_id">Golongan Darah</label>
                                        <select class="form-control" name="goldr_id">
                                            <?php foreach ($gol_darah as $r) : ?>
                                                <option value="<?= $r['goldr_id']; ?>"><?= $r['goldr_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="agm_id">Agama</label>
                                        <select class="form-control" name="agm_id">
                                            <?php foreach ($agama as $r) : ?>
                                                <option value="<?= $r['agm_id']; ?>"><?= $r['agm_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="stspnkn_id">Status Perkawinan</label>
                                        <select class="form-control" name="stspnkn_id">
                                            <?php foreach ($sts_pernikahan as $r) : ?>
                                                <option value="<?= $r['stspnkn_id']; ?>"><?= $r['stspnkn_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perkawinan</label><br>
                                        <input type="radio" id="html" name="pndk_akta_kawin" value="Ada">
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_kawin" value="Tidak Ada">
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_noakta_kawin">No Akta Perkawinan</label>
                                        <input type="text" name="pndk_noakta_kawin" class="form-control" placeholder="no akta perkawinan" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pndk_tgl_kawin" class="form-control-label">Tanggal Perkawinan</label>
                                        <input class="form-control" type="date" name="pndk_tgl_kawin">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perceraian</label><br>
                                        <input type="radio" id="html" name="pndk_akta_cerai" value="Ada">
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_cerai" value="Tidak Ada">
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_noakta_cerai">No Akta Perceraian</label>
                                        <input type="text" name="pndk_noakta_cerai" class="form-control" placeholder="no akta cerai" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pndk_tgl_cerai" class="form-control-label">Tanggal Perceraian</label>
                                        <input class="form-control" type="date" name="pndk_tgl_cerai">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sts_hub_id">Status Hubungan dalam Keluarga</label>
                                        <select class="form-control" name="sts_hub_id">
                                            <?php foreach ($sts_hub_kel as $r) : ?>
                                                <option value="<?= $r['sts_hub_id']; ?>"><?= $r['sts_hub_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Kelainan Fisik dan Mental</label><br>
                                        <input type="radio" id="html" name="pndk_kelainan" value="Ada">
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_kelainan" value="Tidak Ada">
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Penyandang Cacat</label>
                                        <select class="form-control" name="pndk_cacat">
                                            <option value="Cacat Fisik">Cacat Fisik</option>
                                            <option value="Cacat Netra/Buta">Cacat Netra/Buta</option>
                                            <option value="Cacat Rungu/Wicara">Cacat Rungu/Wicara</option>
                                            <option value="Cacat Mental/Jiwa">Cacat Mental/Jiwa</option>
                                            <option value="Cacat Fisik dan Mental">Cacat Fisik dan Mental</option>
                                            <option value="Cacat Lainnya">Cacat Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pnd_id">Pendidikan Terakhir</label>
                                        <select class="form-control" name="pnd_id">
                                            <?php foreach ($pendidikan as $r) : ?>
                                                <option value="<?= $r['pnd_id']; ?>"><?= $r['pnd_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pkrj_id">Pekerjaan</label>
                                        <select class="form-control" name="pkrj_id">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="example-tel-input" class="form-control-label">Foto Penduduk</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="pndk_foto" id="gambar">
                                        <label class="custom-file-label" for="pndk_foto">Select file</label>
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
                                        <label class="form-control-label" for="pndk_nik_ayah">NIK</label>
                                        <input type="text" name="pndk_nik_ayah" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ayah</label>
                                        <input type="text" name="pndk_nama_ayah" class="form-control" placeholder="Nama Ayah" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pndk_nik_ibu">NIK</label>
                                        <input type="text" name="pndk_nik_ibu" class="form-control" placeholder="NIK" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ibu</label>
                                        <input type="text" name="pndk_nama_ibu" class="form-control" placeholder="Nama Ibu" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Data Administrasi</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ketua RT</label>
                                        <select class="form-control" name="rt_id">
                                            <?php foreach ($rt as $r) : ?>
                                                <option value="<?= $r['rt_id']; ?>"><?= $r['rt_nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ketua RW</label>
                                        <select class="form-control" name="rw_id">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>"><?= $r['rw_nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>