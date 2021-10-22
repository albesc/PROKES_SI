<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit data penduduk </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Penduduk/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="pndk_id" class="form-control" value="<?= $penduduk['pndk_id'] ?>">
                        <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                        <h6 class="heading-small text-muted mb-4"><br>Data Wilayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" name="pndk_provinsi" class="form-control" placeholder="provinsi" value="<?= $penduduk['pndk_provinsi']; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" name="pndk_kabupatenkota" class="form-control" placeholder="kabupaten / kota" value="<?= $penduduk['pndk_kabupatenkota']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" name="pndk_kecamatan" class="form-control" placeholder="kecamatan" value="<?= $penduduk['pndk_kecamatan']; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" name="pndk_desalurah" class="form-control" placeholder="desa / lurah" value="<?= $penduduk['pndk_desalurah']; ?>">
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
                                        <input type="text" name="pndk_namakk" class="form-control" placeholder="pndk_namakk" value="<?= $penduduk['pndk_namakk']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No KK Kepala Keluarga</label>
                                        <input type="text" name="pndk_nokk" class="form-control" placeholder="No KK" value="<?= $penduduk['pndk_nokk']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat Keluarga</label>
                                        <input type="text" name="pndk_alamat" class="form-control" placeholder="alamat" value="<?= $penduduk['pndk_alamat']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RW</label>
                                        <select class="form-control" name="rw_id">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>" <?php if ($penduduk['rw_id'] == $r['rw_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RT</label>
                                        <select class="form-control" name="rt_id">
                                            <?php foreach ($rt as $r) : ?>
                                                <option value="<?= $r['rt_id']; ?>" <?php if ($penduduk['rt_id'] == $r['rt_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $r['no_rt']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Dusun</label>
                                        <input type="text" name="pndk_desalurah" class="form-control" placeholder="nama dusun" value="<?= $penduduk['pndk_desalurah']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode Pos</label>
                                        <input type="number" name="pndk_kodepos" class="form-control" placeholder="kode pos" value="<?= $penduduk['pndk_kodepos']; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" name="pndk_tlpkeluarga" class="form-control" placeholder="No HP" value="<?= $penduduk['pndk_tlpkeluarga']; ?>">
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
                                        <label class="form-control-label" for="input-email">Nama</label>
                                        <input type="text" name="pndk_fullname" class="form-control" placeholder="nama" value="<?= $penduduk['pndk_fullname']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" name="pndk_nik" class="form-control" placeholder="NIK" value="<?= $penduduk['pndk_nik']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No KK</label>
                                        <input type="text" name="pndk_nokk" class="form-control" placeholder="No KK" value="<?= $penduduk['pndk_nokk']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="pndk_alamat" class="form-control" placeholder="alamat" value="<?= $penduduk['pndk_alamat']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RW</label>
                                        <select class="form-control" name="rw_id">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>" <?php if ($penduduk['rw_id'] == $r['rw_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RT</label>
                                        <select class="form-control" name="rt_id">
                                            <?php foreach ($rt as $r) : ?>
                                                <option value="<?= $r['rt_id']; ?>" <?php if ($penduduk['rt_id'] == $r['rt_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $r['no_rt']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Dusun</label>
                                        <input type="text" name="pndk_desalurah" class="form-control" placeholder="nama dusun" value="<?= $penduduk['pndk_desalurah']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode Pos</label>
                                        <input type="number" name="pndk_kodepos" class="form-control" placeholder="kode pos" value="<?= $penduduk['pndk_kodepos']; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" name="pndk_tlp" class="form-control" placeholder="No HP" value="<?= $penduduk['pndk_tlp']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Paspor</label>
                                        <input type="text" name="pndk_nopaspor" class="form-control" placeholder="no paspor" value="<?= $penduduk['pndk_nopaspor']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal berakhir paspor</label>
                                        <input class="form-control" type="date" name="pndk_tgl_berakhir_paspor" value="<?= $penduduk['pndk_tgl_berakhir_paspor']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="example-tel-input" class="form-control-label">Jenis Kelamin</label><br>
                                    <input type="radio" id="html" name="pndk_jk" value="Laki-Laki" <?php if ($penduduk['pndk_jk'] == "Laki-Laki") { ?> checked <?php } ?>>
                                    <label for="html">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="css" name="pndk_jk" value="Perempuan" <?php if ($penduduk['pndk_jk'] == "Perempuan") { ?> checked <?php } ?>>
                                    <label for="css">Perempuan</label>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label>
                                        <input type="text" name="pndk_tmp_lahir" class="form-control" placeholder="tempat lahir" value="<?= $penduduk['pndk_tmp_lahir']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="pndk_tgl_lahir" value="<?= $penduduk['pndk_tgl_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="<?= $penduduk['pndk_umur']; ?>" name="pndk_umur">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Kelahiran</label><br>
                                        <input type="radio" id="html" name="pndk_akta_lahir" value="Ada" <?php if ($penduduk['pndk_akta_lahir'] == "Ada") { ?> checked <?php } ?>>
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_lahir" value="Tidak Ada" <?php if ($penduduk['pndk_akta_lahir'] == "Tidak Ada") { ?> checked <?php } ?>>
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Kelahiran</label>
                                        <input type="text" name="pndk_noakta_lahir" class="form-control" placeholder="no akta kelahiran" value="<?= $penduduk['pndk_noakta_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Golongan Darah</label>
                                        <select class="form-control" name="goldr_id">
                                            <?php foreach ($gol_darah as $r) : ?>
                                                <option value="<?= $r['goldr_id']; ?>" <?php if ($penduduk['goldr_id'] == $r['goldr_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['goldr_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Agama</label>
                                        <select class="form-control" name="agm_id">
                                            <?php foreach ($agama as $r) : ?>
                                                <option value="<?= $r['agm_id']; ?>" <?php if ($penduduk['agm_id'] == $r['agm_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['agm_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status Perkawinan</label>
                                        <select class="form-control" name="stspnkn_id">
                                            <?php foreach ($sts_pernikahan as $r) : ?>
                                                <option value="<?= $r['stspnkn_id']; ?>" <?php if ($penduduk['stspnkn_id'] == $r['stspnkn_id']) {
                                                                                                echo "selected";
                                                                                            } ?>><?= $r['stspnkn_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perkawinan</label><br>
                                        <input type="radio" id="html" name="pndk_akta_kawin" value="Ada" <?php if ($penduduk['pndk_akta_kawin'] == "Ada") { ?> checked <?php } ?>>
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_kawin" value="Tidak Ada" <?php if ($penduduk['pndk_akta_kawin'] == "Tidak Ada") { ?> checked <?php } ?>>
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Perkawinan</label>
                                        <input type="text" name="pndk_noakta_kawin" class="form-control" placeholder="no akta perkawinan" value="<?= $penduduk['pndk_noakta_kawin']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Perkawinan</label>
                                        <input class="form-control" type="date" name="pndk_tgl_kawin" value="<?= $penduduk['pndk_tgl_kawin']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perceraian</label><br>
                                        <input type="radio" id="html" name="pndk_akta_cerai" value="Ada" <?php if ($penduduk['pndk_akta_cerai'] == "Ada") { ?> checked <?php } ?>>
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_akta_cerai" value="Tidak Ada" <?php if ($penduduk['pndk_akta_cerai'] == "Tidak Ada") { ?> checked <?php } ?>>
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Perceraian</label>
                                        <input type="text" name="pndk_noakta_cerai" class="form-control" placeholder="no akta perkawinan" value="<?= $penduduk['pndk_noakta_cerai']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Perceraian</label>
                                        <input class="form-control" type="date" name="pndk_tgl_cerai" value="<?= $penduduk['pndk_tgl_cerai']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status Hubungan dalam Keluarga</label>
                                        <select class="form-control" name="sts_hub_id">
                                            <?php foreach ($sts_hub_kel as $r) : ?>
                                                <option value="<?= $r['sts_hub_id']; ?>" <?php if ($penduduk['sts_hub_id'] == $r['sts_hub_id']) {
                                                                                                echo "selected";
                                                                                            } ?>><?= $r['sts_hub_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Kelainan Fisik dan Mental</label><br>
                                        <input type="radio" id="html" name="pndk_kelainan" value="Ada" <?php if ($penduduk['pndk_kelainan'] == "Ada") { ?> checked <?php } ?>>
                                        <label for="html">Ada</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="css" name="pndk_kelainan" value="Tidak Ada" <?php if ($penduduk['pndk_kelainan'] == "Tidak Ada") { ?> checked <?php } ?>>
                                        <label for="css">Tidak Ada</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Penyandang Cacat</label>
                                        <select class="form-control" name="pndk_cacat">
                                            <option value="Cacat Fisik" <?php if ($penduduk['pndk_cacat'] == "Cacat Fisik") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Fisik</option>
                                            <option value="Cacat Netra/Buta" <?php if ($penduduk['pndk_cacat'] == "Cacat Netra/Buta") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Netra/Buta</option>
                                            <option value="Cacat Rungu/Wicara" <?php if ($penduduk['pndk_cacat'] == "Cacat Rungu/Wicara") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Rungu/Wicara</option>
                                            <option value="Cacat Mental/Jiwa" <?php if ($penduduk['pndk_cacat'] == "Cacat Mental/Jiwa") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Mental/Jiwa</option>
                                            <option value="Cacat Fisik dan Mental" <?php if ($penduduk['pndk_cacat'] == "Cacat Fisik dan Mental") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Fisik dan Mental</option>
                                            <option value="Cacat Lainnya" <?php if ($penduduk['pndk_cacat'] == "Cacat Lainnya") {
                                                                            echo "selected";
                                                                        } ?>>Cacat Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pendidikan</label>
                                        <select class="form-control" name="pnd_id">
                                            <?php foreach ($pendidikan as $r) : ?>
                                                <option value="<?= $r['pnd_id']; ?>" <?php if ($penduduk['pnd_id'] == $r['pnd_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pnd_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="pkrj_id">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>" <?php if ($penduduk['pkrj_id'] == $r['pkrj_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="example-tel-input" class="form-control-label">Foto Penduduk</label>
                                    <img src="<?= base_url('assets/img/penduduk/') . $penduduk['pndk_foto']; ?>" style="width: 100px" class="img-thumbnail">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="pndk_foto" lang="en">
                                        <label class="custom-file-label" for="customFileLang">Select file</label>
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" name="pndk_nik_ayah" class="form-control" placeholder="NIK" value="<?= $penduduk['pndk_nik_ayah']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ayah</label>
                                        <input type="text" name="pndk_nama_ayah" class="form-control" placeholder="Nama Ayah" value="<?= $penduduk['pndk_nama_ayah']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" name="pndk_nik_ibu" class="form-control" placeholder="NIK" value="<?= $penduduk['pndk_nik_ibu']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ibu</label>
                                        <input type="text" name="pndk_nama_ibu" class="form-control" placeholder="Nama Ibu" value="<?= $penduduk['pndk_nama_ibu']; ?>">
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
                                                <option value="<?= $r['rt_id']; ?>" <?php if ($penduduk['rt_id'] == $r['rt_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['no_rt']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ketua RW</label>
                                        <select class="form-control" name="rw_id">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>" <?php if ($penduduk['rw_id'] == $r['rw_id']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>