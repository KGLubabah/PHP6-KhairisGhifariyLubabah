<?php
session_start();

$_SESSION['namauser'] = "Khairis";

echo $_SESSION['namauser'];

echo "<a href='Praktikum2.php'> Ke Halaman 2</a>";
?>