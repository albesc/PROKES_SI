 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data Sarana & Prasarana</h3>
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
                         <form action="<?= base_url('Sapras/update'); ?>" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="spr_id" class="form-control" value="<?= $saprsarana['spr_id'] ?>">
                             <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Sarana & Prasarana</label>
                                         <input class="form-control" name="spr_name" type="text" value="<?= $saprsarana['spr_name'] ?>" id="example-text-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Jenis Sarana & Prasarana</label>
                                         <select class="form-control" name="sprjns_id">
                                             <?php foreach ($sprjns as $r) : ?>
                                                 <option value="<?= $r['sprjns_id']; ?>" <?php if ($saprsarana['sprjns_id'] == $r['sprjns_id']) {
                                                                                                echo "selected";
                                                                                            } ?>><?= $r['sprjns_name']; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Kondisi</label>
                                         <select class="form-control" name="spr_kondisi">
                                             <option <?php if($saprsarana['spr_kondisi'] == "Baik") echo "selected"; ?>>Baik</option>
                                             <option <?php if($saprsarana['spr_kondisi'] == "Buruk") echo "selected"; ?>>Buruk</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Lokasi</label>
                                         <input class="form-control" name="spr_lokasi" type="text" value="<?= $saprsarana['spr_lokasi'] ?>" id="example-text-input">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Gambar</label>
                                     <img src="<?= base_url('assets/img/sapras/') . $saprsarana['spr_gambar']; ?>" style="width: 100px" class="img-thumbnail">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="spr_gambar" lang="en">
                                         <label class="custom-file-label" for="customFileLang">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>