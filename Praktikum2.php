<?php
session_start();

if(!isset($_SESSION['namauser'])){
    //jika session belum di set/register
    die("Anda belum register kan session");
}

//jika sudah register kita lanjut
?>
<h2>Selamat Datang</h2>

<?php
echo $_SESSION['namauser'];
?>