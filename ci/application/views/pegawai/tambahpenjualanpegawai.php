<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color:dimgrey">
        <h3 class="card-title" >TAMBAH PRODUK</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <form action="<?= base_url('pegawais/penjualanpegawai/tambah_aksi')?>" method="POST">
       <div class="form-group">
        <label>PILIH ID PRODUK</label>
    <select name="ID_PRODUK" class="form-control">
        <option value="">-- Pilih PRODUK --</option>
        <option value="1">tahu</option>
        <option value="2">tempe</option>
    </select>
    <?= form_error('ID_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
        <div class="form-group">
            <label>TANGGAL PENJUALAN</label>
        <input type="date" name="TGL_PENJUALAN" class="form-control" >
        <?= form_error('TGL_PENJUALAN', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>JUMLAH PENJUALAN</label>
        <input type="text" name="JMH_PENJUALAN" class="form-control" >
        <?= form_error('JMH_PENJUALAN', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>DISKON</label>
        <input type="text"  name="DISKON_PENJUALAN" class="form-control">
        <?= form_error('DISKON_PENJUALAN', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>simpan</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>hapus</button>
    </form>
</div>
</div>
<script>
document.getElementById('DISKON_PENJUALAN').addEventListener('input', function (e) {
    var value = e.target.value;
    value = value.replace(/[^0-9]/g, '');
    value = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(value);
    e.target.value = value.replace('IDR', 'Rp');
});
</script>