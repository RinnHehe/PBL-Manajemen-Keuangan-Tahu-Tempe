<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color:dimgrey">
        <h3 class="card-title">TAMBAH USER</h3>
    </div>
    <div class="card-body">
       <form action="<?= base_url('useradmin/tambah_aksi') ?>" method="POST">
        <div class="form-group">
            <label>USERNAME_USER</label>
            <input type="text" name="USERNAME_USER" class="form-control">
            <?= form_error('USERNAME_USER', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="NIK_USER" class="form-control">
            <?= form_error('NIK_USER', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="NAMA_USER" class="form-control">
            <?= form_error('NAMA_USER', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>LEVEL</label>
            <select name="LEVEL_USER" class="form-control">
                <option value="">-- Pilih Kategori --</option>
                <option value="1">ADMIN</option>
                <option value="2">PEGAWAI</option>
            </select>
            <?= form_error('LEVEL_USER', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>PASSWORD</label>
            <textarea name="PASSWORD_USER" class="form-control"></textarea>
            <?= form_error('PASSWORD_USER', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> simpan</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> hapus</button>
    </form>
</div>
</div>
