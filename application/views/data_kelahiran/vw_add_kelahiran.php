<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tambah Data Kelahiran </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informasi Kelahiran</h6>
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
                                        <label class="form-control-label" for="input-email">Nama</label>
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
                                        <label class="form-control-label" for="input-email">Tempat Kelahiran</label>
                                        <input type="text" name="klhrn_tmpt_kelahiran" class="form-control" placeholder="Tempat Kelahiran">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Hari Kelahiran</label>
                                        <input type="text" name="tidakadavariabel" class="form-control" placeholder="Hari Kelahiran">
                                    </div>
                                </div>
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
                                        <label class="form-control-label" for="exampleFormControlSelect1">Jenis Kelahiran</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
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
                                        <input type="text" name="klhrn_ke" class="form-control" placeholder="Kelahiran ke">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Penolong Kelahiran</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
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
                                        <input type="text" name="input-first-name" class="form-control" placeholder="Kg" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Panjang Bayi</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="Cm" value="">
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
                                        <input type="text" name="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label>
                                        <input type="email" name="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="example-date-input">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" name="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>Wiraswasta</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="alamat" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kewarganegaraan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>WNI</option>
                                            <option>WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kebangsaan</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="kebangsaan" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Pencatatan Perkawinan</label>
                                        <input class="form-control" type="date" name="example-date-input">
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
                                        <label class="form-control-label" for="input-username">NIK</label>
                                        <input type="text" name="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label>
                                        <input type="email" name="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="example-date-input">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" name="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>Wiraswasta</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="alamat" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kewarganegaraan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>WNI</option>
                                            <option>WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kebangsaan</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="kebangsaan" value="">
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
                                        <input type="text" name="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-control-label" for="input-email">Nama</label>
                                    <input type="email" name="input-email" class="form-control" placeholder="nama" value="">
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" name="example-number-input">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-control-label">Jenis Kelamin</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>Wiraswasta</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="alamat" value="">
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
                                        <input type="text" name="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label>
                                        <input type="email" name="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" name="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>Wiraswasta</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="alamat" value="">
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
                                        <input type="text" name="input-username" class="form-control" placeholder="NIK" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nama</label>
                                        <input type="email" name="input-email" class="form-control" placeholder="nama" value="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="example-number-input" class="form-control-label">Umur</label>
                                        <input class="form-control" type="number" value="23" name="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Pekerjaan</label>
                                        <select class="form-control" name="exampleFormControlSelect1">
                                            <option>Wiraswasta</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Alamat</label>
                                        <input type="text" name="input-first-name" class="form-control" placeholder="alamat" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>