<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit data penduduk </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Data Wilayah</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Provinsi</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="provinsi" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kabupaten / Kota</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="kabupaten / kota" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="kecamatan" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Desa / Lurah</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="desa / lurah" value="">
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
                                        <input type="email" id="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No KK Kepala Keluarga</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="No KK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat Keluarga</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" value="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RW</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>"><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RT</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label class="form-control-label" for="input-first-name">Nama Dusun / Dukuh</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="nama dusun" value="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode Pos</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode pos" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="No HP" value="">
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
                                        <input type="email" id="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">No KK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="No KK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat Keluarga</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="alamat" value="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RW</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($rw as $r) : ?>
                                                <option value="<?= $r['rw_id']; ?>"><?= $r['no_rw']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">RT</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label class="form-control-label" for="input-first-name">Nama Dusun / Dukuh</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="nama dusun" value="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kode Pos</label>
                                        <input type="number" id="input-first-name" class="form-control" placeholder="kode pos" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="No HP" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Paspor</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="no paspor" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal berakhir paspor</label>
                                        <input class="form-control" type="date" id="example-date-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="example-tel-input" class="form-control-label">Jenis Kelamin</label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Tempat Lahir</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="tempat lahir" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" id="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Kelahiran</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Ada</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Kelahiran</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="no akta kelahiran" value="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Golongan Darah</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <label class="form-control-label" for="exampleFormControlSelect1">Agama</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($agama as $r) : ?>
                                                <option value="<?= $r['agm_id']; ?>"><?= $r['agm_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status Perkawinan</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($sts_pernikahan as $r) : ?>
                                                <option value="<?= $r['stspnkn_id']; ?>"><?= $r['stspnkn_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perkawinan</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Ada</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Perkawinan</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="no akta perkawinan" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Perkawinan</label>
                                        <input class="form-control" type="date" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Akta Perceraian</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Ada</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Akta Perceraian</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="no akta perkawinan" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Perceraian</label>
                                        <input class="form-control" type="date" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Status Hubungan dlm Keluarga</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Ada</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Penyandang Cacat</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="">Cacat Fisik</option>
                                            <option value="">Cacat Mental/Jiwa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pendidikan</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($pendidikan as $r) : ?>
                                                <option value="<?= $r['pnd_id']; ?>"><?= $r['pnd_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($pekerjaan as $r) : ?>
                                                <option value="<?= $r['pkrj_id']; ?>"><?= $r['pkrj_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kewarganegaraan</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($kewarganegaraan as $r) : ?>
                                                <option value="<?= $r['kwgn_id']; ?>"><?= $r['kwgn_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Jenis Asuransi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($jns_asuransi as $r) : ?>
                                                <option value="<?= $r['jnsasn_id']; ?>"><?= $r['jnsasn_ket']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">No Telp</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="No HP" value="">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label for="example-tel-input" class="form-control-label">Foto Penduduk</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="en">
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
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ayah</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="Nama Ayah" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ibu</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="Nama Ibu" value="">
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
                                        <input type="text" id="input-first-name" class="form-control" placeholder="Nama Ketua RT" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Ketua RW</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="Nama Ketua RW" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>