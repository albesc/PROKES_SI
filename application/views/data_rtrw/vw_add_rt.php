 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data RT</h3>
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
                         <form action="<?= base_url('Rt/upload'); ?>" method="post" enctype="multipart/form-data">
                             <input class="form-control" type="hidden" name="rw_id" value="<?= $rw_id ?>">
                             <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">RT</label>
                                         <input class="form-control" type="text" name="no_rt">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Nama Ketua RT</label>
                                         <input class="form-control" type="text" name="rt_nama">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Alamat Ketua RT</label>
                                         <input class="form-control" type="text" name="alamat">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">No HP Ketua RT</label>
                                         <input class="form-control" type="text" name="no_tlp">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal menjabat</label>
                                         <input class="form-control" type="date" name="tgl_jabat">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Tanggal berakhir jabatan</label>
                                         <input class="form-control" type="date" name="tgl_akhir">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-5">
                                     <label for="example-tel-input" class="form-control-label">Foto Ketua RT</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="rt_foto" id="gambar">
                                         <label class="custom-file-label" for="rt_foto">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>