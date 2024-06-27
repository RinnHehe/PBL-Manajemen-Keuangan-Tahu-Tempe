<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color:dimgrey">
        <h3 class="card-title" >TAMBAH PRODUK</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <form action="<?= base_url('stokbarangadmin/tambah_aksi')?>" method="POST">
        <div class="form-group">
        <div class="form-group">
        <label>Nama barang</label>
        <input type="text" name="NAMA_PRODUK" class="form-control" >
        <?= form_error('NAMA_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>Harga</label>
        <input type="text" name="HARGA_PRODUK" class="form-control" >
        <?= form_error('HARGA_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>Stok</label>
        <input type="text" name="STOK_PRODUK" class="form-control" >
        <?= form_error('STOK_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>Kategori</label>
    <select name="KATEGORI_PRODUK" class="form-control">
        <option value="">-- Pilih Kategori --</option>
        <option value="tahu">tahu</option>
        <option value="tempe">tempe</option>
    </select>
    <?= form_error('KATEGORI_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
        <div class="form-group">
        <label>Deskripsi</label>
        <textarea  name="DESKRIPSI_PRODUK" cols="30" rows="10" class="form-control"></textarea>
        <?= form_error('DESKRIPSI_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>simpan</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>hapus</button>
    </form>
</div>
</div>
