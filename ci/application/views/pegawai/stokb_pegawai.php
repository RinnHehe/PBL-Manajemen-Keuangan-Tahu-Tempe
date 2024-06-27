<?php if(isset($_SESSION['pesan'])): ?>
            <?= $_SESSION['pesan']; ?>
        <?php endif; ?>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">STOK BARANG HARI INI</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            
        
        <!-- CATATAN TAMBAH STOK DAN TAMBAH PRODUK BELUM SELESAI PADA BAGIAN A HREF, HAPUS TEKS INI JIKA SELESAI  -->




            <thead>
                <tr>
                  
                    <th>Nama barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>edit</th>
                    <th>hapus</th>
                </tr>
            </thead>
            <?php foreach ($stokpegawai as $produk): ?>
            <tbody>
                <tr>
                
                    <td><?php echo $produk->NAMA_PRODUK; ?></td>
                    <td><?php echo $produk->HARGA_PRODUK; ?></td>
                    <td><?php echo $produk->STOK_PRODUK; ?></td>
                    <td><?php echo $produk->KATEGORI_PRODUK; ?></td>
                    <td><?php echo $produk->DESKRIPSI_PRODUK; ?></td>
                    <td><button data-toggle="modal" data-target="#edit<?= $produk->ID_PRODUK?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    

                    </td>
                    <td>
                    <a href="<?= base_url('pegawais/stokbarangpegawai/delete/'. $produk->ID_PRODUK) ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i>
                    </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($stokpegawai as $produk):?>
        <div class="modal fade" id="edit<?= $produk->ID_PRODUK?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit stok barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
            </button>
            </div>
                        <div class="modal-body">
                        <form action="<?= base_url('pegawais/stokbarangpegawai/edit/' . $produk->ID_PRODUK)?>" method="POST">
        
        <div class="form-group">
        <label>Nama barang</label>
        <input type="text" name="NAMA_PRODUK" class="form-control" value="<?= $produk->NAMA_PRODUK?>">
        <?= form_error('NAMA_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>Harga</label>
        <input type="text" name="HARGA_PRODUK" class="form-control" value="<?= $produk->HARGA_PRODUK?>">
        <?= form_error('HARGA_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
        <label>Stok</label>
        <input type="text" name="STOK_PRODUK" class="form-control" value="<?= $produk->STOK_PRODUK?>">
        <?= form_error('STOK_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
    <label>Kategori</label>
    <select name="KATEGORI_PRODUK" class="form-control">
        <option value="">-- Pilih Kategori --</option>
        <option value="Pangan" <?= $produk->KATEGORI_PRODUK == 'Pangan' ? 'selected' : '' ?>>Pangan</option>
    </select>
    <?= form_error('KATEGORI_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="DESKRIPSI_PRODUK" cols="30" rows="10" class="form-control"><?= $produk->DESKRIPSI_PRODUK ?></textarea>
    <?= form_error('DESKRIPSI_PRODUK', '<div class="text-small text-danger">', '</div>'); ?>
</div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>simpan</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>hapus</button>
        </div>
    </form>
                        
                
        </div>
    </div>
    </div>
</div>
<?php endforeach; ?>


<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" id="confirmDelete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.delete-btn').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $('#confirmDelete').attr('href', '<?= base_url('hapus/') ?>' + id);
            $('#deleteModal').modal('show');
        });
    });
</script>
