Pada Praktikum 9 ini saya membuat aplikasi CRUD berbasis PHP dengan pendekatan modularisasi agar struktur kode lebih rapi dan mudah dikembangkan, 
menggunakan folder config untuk menyimpan koneksi database, views untuk template tampilan seperti header.php dan footer.php, 
modules/user untuk menampung seluruh proses CRUD (list, tambah, ubah, hapus), serta folder assets untuk file CSS modular dan gambar; seluruh halaman diatur melalui sistem routing 
pada index.php menggunakan parameter page, misalnya index.php?page=user/list untuk membuka halaman daftar barang atau index.php?page=user/tambah untuk membuka form tambah data, 
sementara modularisasi ditunjukkan melalui penyisipan template secara otomatis menggunakan require "views/header.php" dan require "views/footer.php" sehingga file CRUD 
seperti modules/user/list.php cukup menampilkan konten tanpa perlu mengulang struktur HTML utama; keseluruhan proses membuat aplikasi CRUD dari Praktikum 8 menjadi lebih fleksibel, 
mudah dirawat, konsisten tampilannya, dan siap digunakan untuk proyek berskala lebih besar.
<img width="1179" height="612" alt="Screenshot 2025-11-24 134943" src="https://github.com/user-attachments/assets/f9276155-d840-439a-9537-169a7c7e5f1c" />
<img width="1176" height="438" alt="Screenshot 2025-11-24 134853" src="https://github.com/user-attachments/assets/70a152d7-e870-4fd2-979d-811a6a53a8ff" />
<img width="1190" height="634" alt="Screenshot 2025-11-24 134828" src="https://github.com/user-attachments/assets/8ea8ffd3-ce16-42b2-90aa-6118997719d0" />
<img width="1164" height="634" alt="Screenshot 2025-11-24 135000" src="https://github.com/user-attachments/assets/d5731034-7cc6-4bbd-8bad-09649beac0f0" />
