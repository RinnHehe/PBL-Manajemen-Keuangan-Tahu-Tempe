<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">STOK BARANG HARI INI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                  </tr>
                  </thead>
                  <?php foreach ($stokbar as $produk): ?>
                  <tbody>
                  <tr>
                    <td><?php echo $produk->NAMA_PRODUK; ?></td>
                    <td><?php echo $produk->HARGA_PRODUK; ?></td>
                    <td><?php echo $produk->STOK_PRODUK; ?></td>
                    <td><?php echo $produk->KATEGORI_PRODUK; ?></td>
                    <td><?php echo $produk->DESKRIPSI_PRODUK; ?></td>                
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>