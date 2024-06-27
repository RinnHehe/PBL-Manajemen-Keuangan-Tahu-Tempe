<div class="card" style="background-color: #dcdcdc;">
    <div class="card-header" style="background-color: dimgrey;">
        <h3 class="card-title">TAMBAH STOK</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="proses_form.php" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <select name="kategori">
                            <option value="pilihan1">Pilihan 1</option>
                            <option value="pilihan2">Pilihan 2</option>
                            <option value="pilihan3">Pilihan 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td><input type="text" name="jumlah_stok"></td>
                </tr>
                <tr>
                    <td>Simpan</td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
