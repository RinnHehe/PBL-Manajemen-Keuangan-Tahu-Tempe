<?php if(isset($_SESSION['pesan'])): ?>
            <?= $_SESSION['pesan']; ?>
        <?php endif; ?>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">PENGELUARAN</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            
        
        <!-- CATATAN TAMBAH STOK DAN TAMBAH PRODUK BELUM SELESAI PADA BAGIAN A HREF, HAPUS TEKS INI JIKA SELESAI  -->


        <a href="<?= base_url('pegawais/tambahpengeluaranpegawai') ?>" class="btn-custom mb-3 mr-3">TAMBAH PENGELUARAN BARU</a>

            <thead>
                <tr>
              
                    <th>Id produk</th>
                    <th>Tanggal pengeluaran</th>
                    <th>Jumlah pengeluaran</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <?php foreach ($pengeluaranpegawais as $produk): ?>
            <tbody>
                <tr>
                    
                    <td><?php echo $produk->NAMA_PRODUK; ?></td>
                    <td><?php echo $produk->TGL_PENGELUARAN; ?></td>
                    <td><?php echo 'Rp ' . number_format($produk->JMH_PENGELUARAN, 0, ',', '.'); ?></td>
        <td><?php echo $produk->CTT_PENGELUARAN; ?></td>      
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>
</div>
