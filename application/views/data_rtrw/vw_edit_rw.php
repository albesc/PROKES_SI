 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data RW</h3>
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
                         <form action="<?= base_url('Rw/update'); ?>" method="post" enctype="multipart/form-data">
                             <input class="form-control" type="hidden" name="rw_id" value="<?= $rw['rw_id'] ?>">
                             <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">RW</label>
                                         <input class="form-control" type="text" name="no_rw" value="<?= $rw['no_rw'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Nama Ketua RW</label>
                                         <input class="form-control" type="text" name="rw_nama" value="<?= $rw['rw_nama'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Alamat Ketua RW</label>
                                         <input class="form-control" type="text" name="alamat" value="<?= $rw['alamat'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">No HP Ketua RW</label>
                                         <input class="form-control" type="text" name="no_tlp" value="<?= $rw['no_tlp'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal menjabat</label>
                                         <input class="form-control" type="date" name="tgl_jabat" value="<?= $rw['tgl_jabat'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal berakhir jabatan</label>
                                         <input class="form-control" type="date" name="tgl_akhir" value="<?= $rw['tgl_akhir'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-5">
                                     <label for="example-tel-input" class="form-control-label">Foto Ketua RW</label>
                                     <img src="<?= base_url('assets/img/rw/') . $rw['rw_foto']; ?>" style="width: 100px" class="img-thumbnail">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="rw_foto" lang="en">
                                         <label class="custom-file-label" for="customFileLang">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>