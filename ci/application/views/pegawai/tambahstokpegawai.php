<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color:dimgrey">
        <h3 class="card-title" >TAMBAH PRODUK</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="proses_form.php" method="post">
            <table>
                <tr>
                    <td>no</td>
                    <td><input type="text" name="id_jurusan" value="1" readonly></td>
                </tr>
                <tr>
                    <td>nama barang</td>
                    <td colspan="3"><input type="text" name="nama_barang" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td>kategori</td>
                    <td colspan="3"><input type="text" name="kategori" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td>jumlah stok</td>
                    <td><input type="text" name="jumlah_stok"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td colspan="3"><textarea name="deskripsi" style="width: 100%;"></textarea></td>
                </tr>
                <tr>
                    <td>simpan</td>
                    <td colspan="3"><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
