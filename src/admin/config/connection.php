<?php
// SESSION 
session_start();
// KONEKSI

// AKAR URL
$akarUrl = "http://localhost/TUBES-WEB-IPL/";
$halamanSaatIni = basename($_SERVER['PHP_SELF']);


// $halamanSaatIni = basename($_SERVER['PHP_SELF']);
// // FUNGSI ALERT
// $_SESSION['gagal'] = $_SESSION['gagal'] ?? '';
// function setPesanKesalahan($pesan_kesalahan)
// {
//     $_SESSION['gagal'] = $pesan_kesalahan;
// }
// function setPesanKeberhasilan($pesan_keberhasilan)
// {
//     $_SESSION['berhasil'] = $pesan_keberhasilan;
// }
