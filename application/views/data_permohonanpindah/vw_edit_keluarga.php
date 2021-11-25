 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data Keluarga Yang Pindah</h3>
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
                         <form action="<?= base_url('Permohonanpindah/update_keluarga'); ?>" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="nik" class="form-control" value="<?= $penduduk['nik'] ?>">
                             <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">NIK</label>
                                         <input class="form-control" type="text" name="nik">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Nama Penduduk</label>
                                         <input class="form-control" type="text" name="nama">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">Masa Berlaku KTP S/D</label>
                                         <input class="form-control" type="date" name="masa_berlaku_ktp">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-text-input" class="form-control-label">SHDK</label>
                                         <input class="form-control" type="text" name="shdk">
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>