 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data Sarana & Prasarana</h3>
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
                         <form action="<?= base_url('Sapras/upload'); ?>" method="post" enctype="multipart/form-data">
                             <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Sarana & Prasarana</label>
                                         <input class="form-control" name="spr_name" type="text" id="example-text-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Jenis Sarana & Prasarana</label>
                                         <select class="form-control" name="sprjns_id">
                                             <?php foreach ($sprjns as $r) : ?>
                                                 <option value="<?= $r['sprjns_id']; ?>"><?= $r['sprjns_name']; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Kondisi</label>
                                         <select class="form-control" id="exampleFormControlSelect1" name="spr_kondisi">
                                             <option>Baik</option>
                                             <option>Buruk</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Lokasi</label>
                                         <input class="form-control" name="spr_lokasi" type="text" id="example-text-input">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Gambar</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="spr_gambar" id="gambar">
                                         <label class="custom-file-label" for="spr_gambar">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>