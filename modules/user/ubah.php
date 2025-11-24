<?php
include "config/koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $gambar = $data['gambar'];

    if ($_FILES['file_gambar']['error'] == 0) {
        $filename = time() . "_" . $_FILES['file_gambar']['name'];
        move_uploaded_file($_FILES['file_gambar']['tmp_name'], "assets/img/$filename");
        $gambar = "assets/img/$filename";
    }

    $sql = "UPDATE data_barang SET 
            nama='$nama',
            kategori='$kategori',
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok',
            gambar='$gambar'
            WHERE id_barang='$id'";

    mysqli_query($conn, $sql);

    echo "<script>location='index.php?page=user/list'</script>";
}
?>

<h2>Ubah Barang</h2>

<form method="POST" enctype="multipart/form-data">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data['nama']; ?>">

    <label>Kategori</label>
    <select name="kategori">
        <option <?= ($data['kategori']=="Elektronik")?'selected':'' ?>>Elektronik</option>
        <option <?= ($data['kategori']=="Komputer")?'selected':'' ?>>Komputer</option>
        <option <?= ($data['kategori']=="Hand Phone")?'selected':'' ?>>Hand Phone</option>
    </select>

    <label>Harga Jual</label>
    <input type="number" name="harga_jual" value="<?= $data['harga_jual']; ?>">

    <label>Harga Beli</label>
    <input type="number" name="harga_beli" value="<?= $data['harga_beli']; ?>">

    <label>Stok</label>
    <input type="number" name="stok" value="<?= $data['stok']; ?>">

    <label>Gambar Saat Ini</label><br>
    <img src="<?= $data['gambar']; ?>" width="150"><br><br>

    <label>Ubah Gambar</label>
    <input type="file" name="file_gambar">

    <button type="submit" name="submit">Update</button>
</form>
