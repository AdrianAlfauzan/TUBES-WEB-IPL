<?php
include "../config/databases.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../assets/css/output.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <?php
        include "../partials/components/navbar.php"
    ?>
    <div class="container w-full mx-auto pt-20">
        <div class="container mx-auto mt-5 p-5 bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-white mb-4">Tugas Akhir</h2>
            <div class="bg-gray-900 p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-yellow-400">Judul Tugas Akhir</h3>
                <p class="text-white">Analisis Algoritma dalam Pemrosesan Data Besar</p>
                <p class="text-gray-400">Mahasiswa: John Doe | Pembimbing: Dr. Alice Smith</p>
            </div>
        </div>
    </div>
    <?php
        include "../partials/components/footer.php"
    ?>
</body>
</html>