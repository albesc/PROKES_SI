 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Detail Data UMKM</h3>
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
                                 <h3 class="mb-0">Detail UMKM </h3>
                             </div>
                         </div>
                     </div>
                     <div class="card-body">
                         <form>
                             <div class="card flex-row">
                                 <div class="img-square-wrapper">
                                     <img class="" src="<?= base_url('assets/img/umkm/') . $umkm['foto_usaha']; ?>" width="300" height="215" alt="Card image cap">
                                 </div>
                                 <div class="card-body">
                                     <h3 class="card-title"><?= $umkm['nama_usaha'] ?></h3>
                                     <div class="row">
                                         <div class="col-2">
                                             <label for="example-tel-input" class="form-control-label">Pemilik Usaha</label><br>
                                             <label class="form-control-label" for="input-username"><?= $umkm['nama_owner'] ?></label>
                                         </div>
                                         <div class="col-2">
                                             <label for="example-tel-input" class="form-control-label">Kategori Usaha</label><br>
                                             <label class="form-control-label" for="input-username">
                                                 <?php foreach ($umkm_kat as $r) :
                                                        if ($umkm['id_kat'] == $r['id_kat']) { ?>
                                                         <?= $r['nama']; ?>
                                                 <?php }
                                                    endforeach; ?>
                                             </label>
                                         </div>
                                         <div class="col-3">
                                             <div class="form-group">
                                                 <label for="example-tel-input" class="form-control-label">Alamat</label><br>
                                                 <label class="form-control-label" for="input-username"><?= $umkm['alamat'] ?></label>
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