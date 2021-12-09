 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Tambah Data UMKM</h3>
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
                         <form action="<?= base_url('Umkm/upload'); ?>" method="post" enctype="multipart/form-data">
                             <button type="submit" name="Tambah" class="btn btn-sm btn-primary">Tambah</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Pemilik</label>
                                         <input class="form-control" type="text" name="nama_owner">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Usaha</label>
                                         <input class="form-control" type="text" name="nama_usaha">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Kategori Usaha</label>
                                         <select class="form-control" name="id_kat">
                                             <?php foreach ($umkm_kat as $r) : ?>
                                                 <option value="<?= $r['id_kat']; ?>"><?= $r['nama']; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Alamat</label>
                                         <input class="form-control" type="text" name="alamat">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Kontak</label>
                                         <input class="form-control" type="text" name="kontak">
                                     </div>
                                 </div>
                                 <div class="col-2">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Jumlah Karyawan</label>
                                         <input class="form-control" type="number" name="jml_karyawan">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                             <div class="col-12">
                                     <label for="example-tel-input" class="form-control-label">Deskripsi Usaha</label><br>
                                     <div class="form-group">
                                         <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi Usaha"></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Foto Usaha</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="foto_usaha" id="gambar">
                                         <label class="custom-file-label" for="foto_usaha">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>