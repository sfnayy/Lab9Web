Pada Praktikum 9 ini saya membuat aplikasi CRUD berbasis PHP dengan pendekatan modularisasi agar struktur kode lebih rapi dan mudah dikembangkan, 
menggunakan folder config untuk menyimpan koneksi database, views untuk template tampilan seperti header.php dan footer.php, 
modules/user untuk menampung seluruh proses CRUD (list, tambah, ubah, hapus), serta folder assets untuk file CSS modular dan gambar; seluruh halaman diatur melalui sistem routing 
pada index.php menggunakan parameter page, misalnya index.php?page=user/list untuk membuka halaman daftar barang atau index.php?page=user/tambah untuk membuka form tambah data, 
sementara modularisasi ditunjukkan melalui penyisipan template secara otomatis menggunakan require "views/header.php" dan require "views/footer.php" sehingga file CRUD 
seperti modules/user/list.php cukup menampilkan konten tanpa perlu mengulang struktur HTML utama; keseluruhan proses membuat aplikasi CRUD dari Praktikum 8 menjadi lebih fleksibel, 
mudah dirawat, konsisten tampilannya, dan siap digunakan untuk proyek berskala lebih besar.
