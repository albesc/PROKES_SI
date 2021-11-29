<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h3 class="h1 text-white d-inline-block mb-0">Tanggapi Pengaduan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3><?= $pengaduan['pgdn_judul'] ?></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Pengaduan/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="pgdn_id" class="form-control" value="<?= $pengaduan['pgdn_id'] ?>">
                        <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                        <div>
                            <h6><br></h6>
                        </div>
                        <h6 class="heading-small text-muted mb-4">Isi Pengaduan</h6>
                        <div class="pl-lg-4">
                            <div class="row justify-content-center">
                                <div class="col text-center">
                                    <img src="<?= base_url('assets/img/pengaduan/') . $pengaduan['pgdn_gambar']; ?>" class="img-fluid" width="300" height="215">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 text-justify">
                                    <?= $pengaduan['pgdn_isi'] ?>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Tanggapan Pengaduan</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="status"
                                    <?php if ($pengaduan['status'] == "1") {
                                        echo "checked";
                                    } ?>>
                                    <label class="custom-control-label" for="customCheck1">Ditampilkan</label>
                                </div> -->
                                <input type="checkbox" name="status" value="check">
                                <label>Ditampilkan</label>
                                <?php
                                if (isset($_POST['submit'])) {
                                    if (!isset($_POST['check'])) {
                                        echo "Not selected!";
                                    } else {
                                        echo "Selected!";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>