<?php if(isset($_SESSION['pesan'])): ?>
            <?= $_SESSION['pesan']; ?>
        <?php endif; ?>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">PENJUALAN</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            
        
        <!-- CATATAN TAMBAH STOK DAN TAMBAH PRODUK BELUM SELESAI PADA BAGIAN A HREF, HAPUS TEKS INI JIKA SELESAI  -->


        <a href="<?= base_url('penjualanadmin/tambah_penjualan/') ?>" class="btn-custom mb-3 mr-3">TAMBAH PENJUALAN BARU</a>

        <thead>
                <tr class="text-center">
                    
                    <th>Nama Produk</th>
                    <th>Tanggal penjualan</th>
                    <th>Jumlah Penjualan</th>
                    <th>Diskon penjualan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php foreach ($penjualanadmin as $produk): ?>
            <tbody>
            <tr class="text-center">
    <td><?php echo $produk->NAMA_PRODUK; ?></td>
    <td><?php echo $produk->TGL_PENJUALAN; ?></td>
    <td><?php echo $produk->JMH_PENJUALAN; ?></td>
    <td><?php echo 'Rp ' . number_format($produk->DISKON_PENJUALAN, 0, ',', '.'); ?></td>
    <td><?php echo 'Rp ' . number_format(($produk->JMH_PENJUALAN * $produk->HARGA_PRODUK) - $produk->DISKON_PENJUALAN, 0, ',', '.'); ?></td>
</tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
