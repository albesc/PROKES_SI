 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h3 class="h1 text-white d-inline-block mb-0">Edit Data UMKM</h3>
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
                         <form action="<?= base_url('Umkm/update'); ?>" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="id_umkm" class="form-control" value="<?= $umkm['id_umkm'] ?>">
                             <button type="submit" name="Update" class="btn btn-sm btn-primary">Edit</button>
                             <h6><br></h6>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">No NIB</label>
                                         <input class="form-control" type="text" name="no_nib" value="<?= $umkm['no_nib'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Pemilik</label>
                                         <input class="form-control" type="text" name="nama_owner" value="<?= $umkm['nama_owner'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Nama Usaha</label>
                                         <input class="form-control" type="text" name="nama_usaha" value="<?= $umkm['nama_usaha'] ?>">
                                     </div>
                                 </div>
                                 <div class="col-3">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Kategori Usaha</label>
                                         <select class="form-control" name="id_kat">
                                             <?php foreach ($umkm_kat as $r) : ?>
                                                 <option value="<?= $r['id_kat']; ?>" <?php if ($umkm['id_kat'] == $r['id_kat']) {
                                                                                                echo "selected";
                                                                                            } ?>><?= $r['nama']; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-4">
                                     <div class="form-group">
                                         <label for="example-tel-input" class="form-control-label">Alamat</label>
                                         <input class="form-control" type="text" name="alamat" value="<?= $umkm['alamat'] ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <label for="example-tel-input" class="form-control-label">Foto Produk</label>
                                     <img src="<?= base_url('assets/img/umkm/') . $umkm['foto_produk']; ?>" style="width: 100px" class="img-thumbnail">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="foto_produk" lang="en">
                                         <label class="custom-file-label" for="customFileLang">Select file</label>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>