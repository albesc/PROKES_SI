 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data Berita</h3>
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
                         <form action="<?= base_url('Berita/update'); ?>" method="post" enctype="multipart/form-data">
                             <button type="submit" name="Edit" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <input class="form-control" type="hidden" name="brt_id" value="<?= $berita['brt_id']; ?>">
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Judul Berita</label>
                                         <input class="form-control" type="text" name="brt_judul" value="<?= $berita['brt_judul']; ?>" placeholder="Judul Berita">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label for="example-tel-input" class="form-control-label">Isi Berita</label><br>
                                     <div class="form-group">
                                         <textarea class="form-control" name="brt_isi" id="exampleFormControlTextarea1" rows="5"><?= $berita['brt_isi']; ?></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Gambar</label>
                                     <img src="<?= base_url('/assets/img/berita/') . $berita['brt_gambar'] ?>" style="width: 100px" class="img-thumbnail">
                                     <div class="custom-file">
                                         <input type="file" name="brt_gambar" class="custom-file-input" id="customFileLang" lang="en">
                                         <label class="custom-file-label" for="customFileLang">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>