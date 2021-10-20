 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data Berita</h3>
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
                         <form action="<?= base_url('Berita/upload'); ?>" method="post" enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Judul Berita</label>
                                         <input class="form-control" type="text" name="brt_judul" placeholder="Judul Berita">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label for="example-tel-input" class="form-control-label">Isi Berita</label><br>
                                     <div class="form-group">
                                         <textarea class="form-control" name="brt_isi" rows="5" placeholder="Isi Berita"></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Gambar</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="brt_gambar" id="gambar" lang="en">
                                         <label class="custom-file-label" for="brt_gambar">Select file</label>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <div class="row">
                                 <div class="col-3">
                                     <button type="submit" name="Tambah" class="btn btn-primary">Tambah</butto>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>