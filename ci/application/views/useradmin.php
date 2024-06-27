<?php if(isset($_SESSION['pesan'])): ?>
            <?= $_SESSION['pesan']; ?>
        <?php endif; ?>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">USER</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    

        <table id="example1" class="table table-bordered table-striped">
            
        
        <!-- CATATAN TAMBAH STOK DAN TAMBAH PRODUK BELUM SELESAI PADA BAGIAN A HREF, HAPUS TEKS INI JIKA SELESAI  -->


        <a href="<?= base_url('useradmin/tambah_user') ?>" class="btn-custom mb-3 mr-3">TAMBAH USER</a>
        <thead>
                <tr class="text-center">
                   
                    <th>Username</th>
                    <th>NIK</th>
                    <th>Nama user</th>
                    <th>Level</th>
                    <th>edit</th>
                    <th>hapus</th>
                </tr>
            </thead>
        <?php foreach ($Useradmin as $produk): ?>
            <tbody>
                <tr class="text-center">
                
                    <td><?php echo $produk->USERNAME_USER; ?></td>
                    <td><?php echo $produk->NIK_USER; ?></td>
                    <td><?php echo $produk->NAMA_USER; ?></td>
                    <td><?php echo $produk->LEVEL_USER; ?></td>
                    <td><button data-toggle="modal" data-target="#edit<?= $produk->NIK_USER?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    </td>
                    <td>
                    <a href="<?= base_url('useradmin/delete/'. $produk->NIK_USER) ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i>
                    </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<?php foreach($Useradmin as $produk): ?>
    <div class="modal fade" id="edit<?= $produk->NIK_USER ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('useradmin/edit/' . $produk->NIK_USER) ?>" method="POST">
                        <div class="form-group">
                            <label>USERNAME_USER</label>
                            <input type="text" name="USERNAME_USER" class="form-control" value="<?= $produk->USERNAME_USER ?>">
                            <?= form_error('USERNAME_USER', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="NIK_USER" class="form-control" readonly value="<?= $produk->NIK_USER ?>">
                            <?= form_error('NIK_USER', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>NAMA USER</label>
                            <input type="text" name="NAMA_USER" class="form-control"  value="<?= $produk->NAMA_USER ?>">
                            <?= form_error('NAMA_USER', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>LEVEL</label>
                            <select name="LEVEL_USER" class="form-control">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="1" <?= $produk->LEVEL_USER == '1' ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= $produk->LEVEL_USER == '2' ? 'selected' : '' ?>>2</option>
                           
                            </select>
                            <?= form_error('LEVEL_USER', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>PASSWORD</label>
                            <textarea name="PASSWORD_USER" class="form-control"><?= $produk->PASSWORD_USER ?></textarea>
                            <?= form_error('PASSWORD_USER', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>