<?php
include "../config/databases.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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

<body class=" font-sans leading-normal tracking-normal">
    
    <?php
    include "../partials/components/navbar.php"
    ?>

    <!--Container-->
    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!--Console Content-->
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 rounded-lg shadow">
                        <div class="flex flex-row items-center p-5">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-blue-600">
                                    <i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center ">
                            <h3 class="text-lg font-semibold text-blue-400">Total Mahasiswa</h3>

                                <h3 class="font-bold text-3xl text-white">249 
                                    <span class="text-blue-400">
                                        <i class="fas fa-exchange-alt "></i>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 rounded-lg shadow">
                        <div class="flex flex-row items-center p-5">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600">
                                    <i class="fas fa-users fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center ">
                                <h3 class="text-lg font-semibold text-green-400">Mahasiswa Aktif</h3>

                                <h3 class="font-bold text-3xl text-white">249 
                                    <span class="text-green-400">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 rounded-lg shadow">
                        <div class="flex flex-row items-center p-5">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600">
                                    <i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center ">
                                <h3 class="text-lg font-semibold text-red-500">Mahasiswa Tertunda</h3>

                                <h3 class="font-bold text-3xl text-white">249 
                                    <span class="text-red-500">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 rounded-lg shadow">
                        <div class="flex flex-row items-center p-5">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600">
                                    <i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center ">
                                <h3 class="text-lg font-semibold text-indigo-400">Agenda Tugas</h3>

                                <h3 class="font-bold text-3xl text-white">7
                                    <span class="text-indigo-400">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                
            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-600 my-8 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Template Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Template Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Template Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/Template Card-->
                </div>

                <div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-gray-800 border border-gray-800 rounded shadow">
                        
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium cumque ipsa libero. Natus libero, cumque hic aut quo quis ipsam laboriosam voluptas neque veniam fugit animi impedit aliquam quisquam iusto.
                        Excepturi porro iste reiciendis sit. Alias recusandae quo cumque facere soluta inventore voluptatum consectetur sed explicabo facilis voluptate, laudantium ipsum odio eius doloremque iste temporibus velit. Reiciendis odio placeat ipsam.</p>
                    </div>
                    <!--/table Card-->
                </div>


            </div>

            <!--/ Console Content-->

        </div>


    </div>
    <!--/container-->

    <?php
    include "../partials/components/footer.php"
    ?>

    <script src="../../assets/js/toggle-admin-profile.js"></script>
    <script src="../../assets/js/toggle-admin-menu.js"></script>
</body>

</html>