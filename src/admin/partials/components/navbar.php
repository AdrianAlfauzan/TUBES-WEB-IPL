<nav id="header" class="bg-gray-900 pb-3 fixed w-full z-10 top-0 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 md:pb-0">

        <div class="w-1/2 pl-2 md:pl-0 ">
            <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                <i class="fas fa-moon text-blue-400 pr-3"></i> Admin Dark Mode
            </a>
        </div>
        <div class="w-1/2 pr-0">
            <div class="flex relative float-right">

                <div class="relative text-sm text-gray-100">
                    <button id="adminButton"
                        class="flex border border-gray-600 hover:text-gray-100 hover:border-teal-500 rounded-md items-center hover:scale-x-90 transition-transform duration-300 focus:outline-none mr-3 pr-5">
                        <img class="w-8 h-8 rounded-full mr-4" src="../../assets/images/faceblack.jpg"
                            alt="Avatar of User">
                        <span class="hidden md:inline-block text-gray-100 sm:flex">Hi, Admin</span>
                    </button>

                    <div id="adminMenu"
                        class="bg-gray-900 rounded shadow-md mt-12 absolute top-0 right-0 min-w-full overflow-auto z-30 opacity-0 transition-opacity duration-300 hidden">
                        <ul class="list-reset">
                            <li><a href="#"
                                    class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">My
                                    account</a></li>
                            <li><a href="#"
                                    class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Notifications</a>
                            </li>
                            <li>
                                <hr class="border-t mx-2 border-gray-400">
                            </li>
                            <li><a href="#"
                                    class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle"
                        class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 focus:outline-none hover:scale-x-90 transition-transform duration-300">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>


        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto transition-opacity duration-300 hidden mt-2 lg:mt-0 bg-gray-900 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/dashboardAdmin.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 border-blue-400 hover:border-blue-400">
                        <i class="fas fa-tachometer-alt fa-fw mr-3 text-blue-400"></i><span
                            class="pb-1 md:pb-0 text-sm">Dashboard</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-mahasiswa.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-pink-400">
                        <i class="fas fa-users fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Mahasiswa</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-pembimbing.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-purple-400">
                        <i class="fas fa-chalkboard-teacher fa-fw mr-3"></i><span
                            class="pb-1 md:pb-0 text-sm">Pembimbing</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-tugas-akhir.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-green-400">
                        <i class="fas fa-book fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Tugas Akhir</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-seminar.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-red-400">
                        <i class="fas fa-calendar-alt fa-fw mr-3"></i><span
                            class="pb-1 md:pb-0 text-sm">Seminar</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-pembayaran.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-teal-400">
                        <i class="fas fa-money-bill-wave fa-fw mr-3"></i><span
                            class="pb-1 md:pb-0 text-sm">Pembayaran</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="<?php echo $akarUrl; ?>src/admin/pages/data-laporan.php"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-orange-400">
                        <i class="fas fa-file-alt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Laporan</span>
                    </a>
                </li>
            </ul>

            <div class="relative pull-right pl-4 pr-4 md:pr-0">
                <input type="search" placeholder="Search"
                    class="w-full bg-gray-900 text-sm text-gray-400 transition border border-gray-800 focus:outline-none focus:border-gray-600 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                    <img src="../../assets/icon/search.png"
                        class="fill-current pointer-events-none bg-transparent text-gray-500 w-5 h-5" alt="">
                </div>
            </div>
        </div>
    </div>
</nav>
