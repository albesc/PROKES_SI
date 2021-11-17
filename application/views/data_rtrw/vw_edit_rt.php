 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data RT</h3>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">
         <div class="row">
             <div class="col">
                 <div class="card">
                     <!-- Card header -->
                     <div class="card-header border-0">
                         <form action="<?= base_url('Rt/update'); ?>" method="post" enctype="multipart/form-data">
                             <input class="form-control" type="hidden" name="rt_id" value="<?= $rt['rt_id'] ?>">
                             <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">RT</label>
                                         <input class="form-control" type="text" name="no_rt" value="<?= $rt['no_rt'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Nama Ketua RT</label>
                                         <input class="form-control" type="text" name="rt_nama" value="<?= $rt['rt_nama'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Alamat Ketua RT</label>
                                         <input class="form-control" type="text" name="alamat" value="<?= $rt['alamat'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">No HP Ketua RT</label>
                                         <input class="form-control" type="text" name="no_tlp" value="<?= $rt['no_tlp'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal menjabat</label>
                                         <input class="form-control" type="date" name="tgl_jabat" value="<?= $rt['tgl_jabat'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal berakhir jabatan</label>
                                         <input class="form-control" type="date" name="tgl_akhir" value="<?= $rt['tgl_akhir'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-5">
                                     <label for="example-tel-input" class="form-control-label">Foto Ketua RT</label>
                                     <img src="<?= base_url('assets/img/rt/') . $rt['rt_foto']; ?>" style="width: 100px" class="img-thumbnail">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="rt_foto" lang="en">
                                         <label class="custom-file-label" for="customFileLang">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>