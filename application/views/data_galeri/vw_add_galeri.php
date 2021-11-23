 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data Galeri</h3>
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
                         <form action="<?= base_url('Galeri/upload'); ?>" method="post" enctype="multipart/form-data">
                             <button type="submit" name="Tambah" class="btn btn-primary btn-sm">Tambah</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Judul Galeri</label>
                                         <input class="form-control" type="text" name="gal_title">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Jenis</label>
                                         <input class="form-control" type="text" name="gal_jns">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">URL</label><br>
                                     <input class="form-control" type="text" name="gal_url">
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>