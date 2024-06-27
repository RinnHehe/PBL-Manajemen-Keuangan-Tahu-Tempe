<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color:dimgrey">
        <h3 class="card-title" >TAMBAH PRODUK</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <form action="<?= base_url('pegawais/pengeluaranpegawai/tambah_aksi')?>" method="POST">
       <div class="form-group">
        <label>PILIH ID PRODUK</label>
    <select name="ID_PRODUK" class="form-control">
        <option value="">-- Pilih PRODUK --</option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <?= form_error('ID_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
        <div class="form-group">
            <label>TANGGAL PENGELUARN</label>
        <input type="date" name="TGL_PENGELUARAN" class="form-control" >
        <?= form_error('TGL_PENGELUARAN', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>JUMLAH PENGELUARAN</label>
        <input type="text" name="JMH_PENGELUARAN" class="form-control" >
        <?= form_error('JMH_PENGELUARAN', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>CATATAN PENGELUARAN</label>
        <textarea  name="CTT_PENGELUARAN" cols="30" rows="10" class="form-control"></textarea>
        <?= form_error('CTT_PENGELUARAN', '<div class="text-small text-danger">', '</div>'); ?>
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
