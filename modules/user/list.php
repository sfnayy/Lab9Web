<?php 
include "config/koneksi.php";

$sql = "SELECT * FROM data_barang";
$result = mysqli_query($conn, $sql);
?>

<h2>Data Barang</h2>

<table>
    <tr>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><img src="<?= $row['gambar']; ?>" width="80"></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kategori']; ?></td>
        <td><?= $row['harga_jual']; ?></td>
        <td><?= $row['harga_beli']; ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
            <a href="index.php?page=user/ubah&id=<?= $row['id_barang']; ?>">Ubah</a> |
            <a href="index.php?page=user/hapus&id=<?= $row['id_barang']; ?>"
                onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
