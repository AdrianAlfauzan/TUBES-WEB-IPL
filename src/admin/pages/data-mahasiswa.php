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
                <h2 class="text-2xl font-semibold text-white mb-4">Data Mahasiswa</h2>
                <table class="min-w-full bg-gray-900 rounded-lg">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="py-3 px-4">Nama</th>
                            <th class="py-3 px-4">NIM</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-700 text-white">
                            <td class="py-3 px-4">John Doe</td>
                            <td class="py-3 px-4">123456</td>
                            <td class="py-3 px-4">Aktif</td>
                            <td class="py-3 px-4">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak data mahasiswa sesuai kebutuhan -->
                    </tbody>
                </table>
        </div>
    </div>
    <?php
        include "../partials/components/footer.php"
    ?>
</body>
</html>