 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data Agenda</h3>
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
                         <form action="<?= base_url('Agenda/update'); ?>" method="post">
                             <button type="submit" name="Edit" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <input class="form-control" type="hidden" name="ag_id" value="<?= $agenda['ag_id']; ?>">
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Agenda</label>
                                         <input class="form-control" type="text" name="ag_name" value="<?= $agenda['ag_name']; ?>" placeholder="Judul Agenda">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Mulai</label>
                                         <input class="form-control" name="ag_tgl_mulai" value="<?= $agenda['ag_tgl_mulai']; ?>" type="date" id="example-date-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Berakhir</label>
                                         <input class="form-control" name="ag_tgl_akhir" value="<?= $agenda['ag_tgl_akhir']; ?>" type="date" id="example-date-input">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label for="example-tel-input" class="form-control-label">Keterangan</label><br>
                                     <div class="form-group">
                                         <textarea class="form-control" name="ag_ket" id="exampleFormControlTextarea1" rows="5"><?= $agenda['ag_ket']; ?></textarea>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>