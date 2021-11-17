 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Detail Data Sarana & Prasarana</h3>
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
                     <div class="card-header">
                         <div class="row align-items-center">
                             <div class="col-8">
                                 <h3 class="mb-0">Detail Sapras </h3>
                             </div>
                         </div>
                     </div>
                     <div class="card-body">
                         <form>
                             <div class="card flex-row">
                                 <div class="img-square-wrapper">
                                     <img class="" src="<?= base_url('assets/img/sapras/') . $saprsarana['spr_gambar']; ?>" width="300" height="215" alt="Card image cap">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title"><?= $saprsarana['spr_name'] ?></h3>
                                     <div class="row">
                                         <div class="col-4">
                                             <label for="example-tel-input" class="form-control-label">Jenis Sarana & Prasarana</label><br>
                                             <label class="form-control-label" for="input-username">
                                                 <?php foreach ($sprjns as $r) :
                                                        if ($saprsarana['sprjns_id'] == $r['sprjns_id']) { ?>
                                                         <?= $r['sprjns_name']; ?>
                                                 <?php }
                                                    endforeach; ?>
                                             </label>
                                         </div>
                                         <div class="col-2">
                                             <label for="example-tel-input" class="form-control-label">Kondisi</label><br>
                                             <label class="form-control-label" for="input-username"><?= $saprsarana['spr_kondisi'] ?></label>
                                         </div>
                                         <div class="col-3">
                                             <div class="form-group">
                                                 <label for="example-tel-input" class="form-control-label">Lokasi</label><br>
                                                 <label class="form-control-label" for="input-username"><?= $saprsarana['spr_lokasi'] ?></label>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>