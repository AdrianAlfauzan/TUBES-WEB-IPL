<?php
include "../config/databases.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran Tugas Akhir</title>
    <meta name="description" content="Halaman pembayaran tugas akhir untuk mahasiswa">
    <meta name="keywords" content="pembayaran, tugas akhir, mahasiswa, universitas">

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
        include "../partials/components/navbar.php";
    ?>
    <div class="container w-full mx-auto pt-20">
        <div class="container mx-auto mt-5 p-5 bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-white mb-4">Kelola Pembayaran Mahasiswa Tugas Akhir</h2>
            <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full text-center">
                                    <thead class="bg-gray-900 text-white">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">No</th>
                                            <th scope="col" class="py-3 px-6">Nama Mahasiswa</th>
                                            <th scope="col" class="py-3 px-6">NIM</th>
                                            <th scope="col" class="py-3 px-6">Jumlah Pembayaran (Rp)</th>
                                            <th scope="col" class="py-3 px-6">Status Pembayaran</th>
                                            <th scope="col" class="py-3 px-6">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-gray-900 text-white">
                                        <!-- Contoh data dummy -->
                                        <tr>
                                            <td class="py-4 px-6">1</td>
                                            <td class="py-4 px-6">John Doe</td>
                                            <td class="py-4 px-6">123456789</td>
                                            <td class="py-4 px-6">1,500,000</td>
                                            <td class="py-4 px-6">Belum Dibayar</td>
                                            <td class="py-4 px-6">
                                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 px-6">2</td>
                                            <td class="py-4 px-6">Jane Smith</td>
                                            <td class="py-4 px-6">987654321</td>
                                            <td class="py-4 px-6">2,000,000</td>
                                            <td class="py-4 px-6">Sudah Dibayar</td>
                                            <td class="py-4 px-6">
                                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan lebih banyak data di sini -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php
        include "../partials/components/footer.php";
    ?>
</body>
</html>

<!-- <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <hr class="border-b-2 border-gray-600 my-8 mx-4">

            <div class="flex flex-col items-center">
                <div class="w-full md:w-2/3 lg:w-1/2 bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">Formulir Pembayaran Tugas Akhir</h2>
                    <form action="proses_pembayaran.php" method="POST">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                                Nama Mahasiswa
                            </label>
                            <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nim">
                                NIM
                            </label>
                            <input type="text" name="nim" id="nim" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan NIM">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlah">
                                Jumlah Pembayaran (Rp)
                            </label>
                            <input type="number" name="jumlah" id="jumlah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan jumlah pembayaran">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="metode">
                                Metode Pembayaran
                            </label>
                            <select name="metode" id="metode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="transfer">Transfer Bank</option>
                                <option value="gopay">GoPay</option>
                                <option value="ovo">OVO</option>
                                <option value="dana">DANA</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Bayar Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->