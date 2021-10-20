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
                         <form action="<?= base_url('Agenda/update'); ?>">
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Agenda</label>
                                         <input class="form-control" name="ag_name" type="text" id="example-text-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Mulai</label>
                                         <input class="form-control" name="ag_start_date" type="date" id="example-date-input">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-date-input" class="form-control-label">Tanggal Berakhir</label>
                                         <input class="form-control" name="ag_finish_date" type="date" id="example-date-input">
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
                                     <button type="submit" name="Edit" class="btn btn-primary">Edit</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>