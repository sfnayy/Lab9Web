<?php
include "config/koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    // upload gambar
    $gambar = null;
    if ($_FILES['file_gambar']['error'] == 0) {
        $filename = time() . "_" . $_FILES['file_gambar']['name'];
        move_uploaded_file($_FILES['file_gambar']['tmp_name'], "assets/img/$filename");
        $gambar = "assets/img/$filename";
    }

    $sql = "INSERT INTO data_barang (nama,kategori,harga_jual,harga_beli,stok,gambar)
            VALUES ('$nama','$kategori','$harga_jual','$harga_beli','$stok','$gambar')";
    mysqli_query($conn, $sql);

    echo "<script>location='index.php?page=user/list'</script>";
}
?>

<h2>Tambah Barang</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Nama</label>
    <input type="text" name="nama">

    <label>Kategori</label>
    <select name="kategori">
        <option>Elektronik</option>
        <option>Komputer</option>
        <option>Hand Phone</option>
    </select>

    <label>Harga Jual</label>
    <input type="number" name="harga_jual">

    <label>Harga Beli</label>
    <input type="number" name="harga_beli">

    <label>Stok</label>
    <input type="number" name="stok">

    <label>Gambar</label>
    <input type="file" name="file_gambar">

    <button type="submit" name="submit">Simpan</button>
</form>
