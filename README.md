# PHP6-KhairisGhifariyLubabah
1. Cookies disimpan di sisi klien, cookies tidak aman bagi klien karena cookies dapat disisipi program yang tidak diketahi klien, data yang disimpan ke dalam metode cookies dapat bertahan lebih lama dan dapat diatur waktu expired-nya.
Disimpan disisi server, lebih aman karena tidak ada file yang dimasukan ke sisi klien, setelah web browser klien dimatikan maka data yang disimpan metode session akan hilang dan waktu expired juga tidak dapat diatur.
2. Pilih tombol berbentuk “kunci inggris” pada sisi kanan atas. Pilih “Tools”. Pilih “Clear Browsing Data”. Pilih “Cache dan Cookies”. Pilih “Clear Browsing Data”
3. MEMBUAT COOKIE :
<html>
<head>
<title>Set Cookie</title>
</head>
<body>
<?php
// Men-set nilai cookie
setcookie('nama_cookie', 'nilai_cookie');
// Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];
?>
<p>
Tekan Refresh (F5);
</body>
</html>
MENGHASPUS COOKIE :
<html>
<head>
<title>Hapus Cookie</title>
</head>
<body>
<?php
setcookie('nama_cookie', 'nilai_cookie');
if (isset($_COOKIE['nama_cookie'])) {
echo 'cookie di-set <br />';
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie',
'', time() - 1 * 3600);
echo 'cookie dihapus';
} else {
echo 'unset';
} ?>
<p>
Tekan Refresh (F5);
</body>
</html>
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%201.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%202.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%203.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%204.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%205.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%205.2.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Latihan%207.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Praktikum1.JPG)
![alt text](https://github.com/KGLubabah/PHP6-KhairisGhifariyLubabah/blob/master/Praktikum2.JPG)
