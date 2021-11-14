 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data Agenda</h3>
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
                         <form action="<?= base_url('Agenda/upload'); ?>" method="post" enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Agenda</label>
                                         <input class="form-control" type="text" name="ag_name" id="example-text-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Mulai</label>
                                         <input class="form-control" type="date" name="ag_tgl_mulai" id="example-date-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Berakhir</label>
                                         <input class="form-control" type="date" name="ag_tgl_akhir" id="example-date-input">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label for="example-tel-input" class="form-control-label">Keterangan</label><br>
                                     <div class="form-group">
                                         <textarea class="form-control" name="ag_ket" id="exampleFormControlTextarea1" rows="5"></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-3">
                                     <button type="submit" name="Tambah" class="btn btn-primary">Tambah</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>