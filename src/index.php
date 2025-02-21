<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abo-Tracking </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #switch.active {
            background-color: #2A0A55;
        }

        #p.active {
            display: flex;
            flex-direction: column;

        }

        #btn.active {
            transform: rotate(180deg);
            transition: all 300ms ease-in-out;
        }

        #title.active {
            color: white !important;
        }
    </style>
</head>

<body>


    <!------start navbar-->
    <header class="w-full fixed z-20 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
        <div class="w-full items-center flex justify-between h-14 px-4 shadow xl:shadow-none">
            <div class="flex space-x-8 items-center">
                <div class="w-24">
                    <img src="images/logo-2.png" alt="brand_logo">

                </div>
                <div class="lg:flex items-center space-x-3 hidden">
                    <div class="w-3 h-3 rounded-full bg-red-500 animate-pulse"></div>
                    <p class="text-base">Votre bouclier gps-4G à votre portée</p>
                </div>
            </div>
            <div class="flex items-center h-full space-x-2">
                <div class="h-full hidden md:flex items-center"> <a href="#"
                        class="px-4 py-1 rounded-full bg-blue-100 hover:bg-blue-200 font-semibold text-blue-600">Find a
                        partner</a></div>
                <div class="px-4 h-full border border-t-0 border-b-0 border-gray-200 flex items-center">
                    <img src="icons/search-interface-symbol.png" width="20" height="20" alt="">
                </div>
                <div class="p-4 h-full flex items-center space-x-4">
                    <select name="languages" class="outline-none text-base text-gray-600" id="">
                        <option value="en">EN</option>
                        <option value="fr">FR</option>
                        <option value="de">Deutsch</option>
                        <option value="es">Español</option>
                        <option value="it">Italiano</option>
                        <option value="ru">Русский</option>
                        <option value="zh">中文</option>
                        <option value="ja">日本語</option>
                        <option value="ko">한국어</option>
                        <option value="pt">Português</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="tr">Türkçe</option>
                        <option value="ar">العربية</option>
                        <option value="ur">اردو</option>
                    </select>
                    <div class=" flex xl:hidden">
                        <img src="icons/menu.png" width="20" height="20" alt="menu_bar">
                    </div>
                </div>
            </div>

        </div>


        <div class="w-full py-8 bg-[#2A0A55] flex items-center justify-center">

            <nav class="w-full px-4 lg:px-8 flex justify-between items-center">
                <!---contain logo-->
                <div class="flex items-center space-x-2">
                    <img src="images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                    <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                </div>
                <div class=" hidden xl:flex lg:space-x-8">
                    <!-- Home Link -->
                    <a href="index.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        <span>Home</span>
                    </a>

                    <!-- Solutions Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                            <span>Solutions</span>
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 w-[560px] bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 -translate-y-2 group-hover:translate-y-1">
                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Colonne 1 -->
                                    <div>
                                        <ul class="space-y-1">
                                            <!-- Leasing de véhicules -->
                                            <li>
                                                <a href="pages/solutions/leasing.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-car-alt text-lg text-blue-600 group-hover/item:text-blue-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Leasing
                                                            de véhicules</span>
                                                        <span class="text-sm text-gray-500">Suivi des véhicules en
                                                            location</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Agriculture intelligente -->
                                            <li>
                                                <a href="pages/solutions/hecterra.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-leaf text-lg text-green-600 group-hover/item:text-green-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Agriculture
                                                            intelligente</span>
                                                        <span class="text-sm text-gray-500">Contrôle des cultures avec
                                                            Hecterra</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Gestion des flottes -->
                                            <li>
                                                <a href="pages/solutions/logistics.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-delivery text-lg text-purple-600 group-hover/item:text-purple-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Gestion
                                                            des flottes</span>
                                                        <span class="text-sm text-gray-500">Gestion des processus de
                                                            livraison</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Eco Driving -->
                                            <li>
                                                <a href="pages/solutions/ecodriving.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-user text-lg text-yellow-600 group-hover/item:text-yellow-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Eco
                                                            Driving</span>
                                                        <span class="text-sm text-gray-500">Contrôle de la qualité de
                                                            conduite</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Colonne 2 -->
                                    <div>
                                        <ul class="space-y-1">
                                            <!-- Maintenance de flotte -->
                                            <li>
                                                <a href="pages/solutions/fleetrun.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-cog text-lg text-red-600 group-hover/item:text-red-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Fleetrun</span>
                                                        <span class="text-sm text-gray-500">Gestion de la
                                                            maintenance</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Équipes terrain -->
                                            <li>
                                                <a href="pages/solutions/wiatag.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-users text-lg text-indigo-600 group-hover/item:text-indigo-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">WI</span>
                                                        <span class="text-sm text-gray-500">Suivi des équipes
                                                            terrain</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Transports publics -->
                                            <li>
                                                <a href="pages/solutions/nimbus.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-bus text-lg text-teal-600 group-hover/item:text-teal-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Nim</span>
                                                        <span class="text-sm text-gray-500">Surveillance des transports
                                                            publics</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Gestion carburant -->
                                            <li>
                                                <a href="pages/solutions/fuel.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-drop text-lg text-orange-600 group-hover/item:text-orange-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">Gestion
                                                            carburant</span>
                                                        <span class="text-sm text-gray-500">Contrôle de
                                                            consommation</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Abonnement Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                            <span>Abonnement</span>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute top-full left-0 w-[280px] bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 -translate-y-2 group-hover:translate-y-1">
                            <div class="p-3">
                                <ul class="space-y-1">
                                    <!-- Basic Plan -->
                                    <li>
                                        <a href="#"
                                            class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                                <i
                                                    class="lni lni-rocket text-lg text-blue-600 group-hover/item:text-blue-700"></i>
                                            </div>
                                            <div>
                                                <span
                                                    class="block text-gray-800 font-medium group-hover/item:text-blue-600">Personnel</span>
                                                <span class="text-sm text-gray-500">Démarrez avec l'essentiel</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Pro Plan -->
                                    <li>
                                        <a href="#"
                                            class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                                <i
                                                    class="lni lni-diamond text-lg text-purple-600 group-hover/item:text-purple-700"></i>
                                            </div>
                                            <div>
                                                <span
                                                    class="block text-gray-800 font-medium group-hover/item:text-blue-600">Entreprise</span>
                                                <span class="text-sm text-gray-500">Solutions personnalisées</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Enterprise Plan -->
                                    <li>
                                        <a href="#"
                                            class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center">
                                                <i
                                                    class="lni lni-crown text-lg text-orange-600 group-hover/item:text-orange-700"></i>
                                            </div>
                                            <div>
                                                <span
                                                    class="block text-gray-800 font-medium group-hover/item:text-blue-600">Dealer</span>
                                                <span class="text-sm text-gray-500">Solution pour les revendeurs</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Bouquets Link -->
                    <a href="pages/bouquets.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">

                        <span>Bouquets</span>
                    </a>

                    <!-- Support Link -->
                    <a href="pages/support.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">

                        <span>Support</span>
                    </a>

                    <!-- Contact Link -->
                    <a href="pages/contact.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">

                        <span>Contact</span>
                    </a>
                </div>
                <div class="space-y-2 lg:hidden">
                    <div class="w-12 h-[2px] bg-white"></div>
                    <div class="w-12 h-[2px] bg-white"></div>
                    <div class="w-12 h-[2px] bg-white"></div>
                </div>
                <div class="hidden md:flex">
                    <button
                        class="px-6 outline-none border-2 text-white text-base duration-200 font-semibold border-white  hover:bg-white hover:text-[#2A0A55] rounded py-3">
                        <a href="#">Commencer</a>
                    </button>
                </div>

            </nav>
        </div>
    </header>

    <!-- Modifier la hauteur de l'espaceur -->
    <div class="w-full" style="height: calc(1.5rem)"></div>

    <!-----banner section-->
    <section class="w-full p-4 lg:p-6 lg:h-screen flex items-center justify-center ">
        <div class="w-full md:w-auto xl:w-5/6 mx-auto space-y-20">
            <!-- Hero Content -->
            <div class="lg:flex items-center justify-between space-y-8 lg:space-y-0">
                <!-- Left side - Text content -->
                <div class="w-full md:w-auto xl:w-2/5 space-y-8">
                    <h2
                        class="text-black text-3xl leading-[50px] lg:text-[42px] text-center lg:text-justify lg:justify-normal font-extrabold">
                        le suivi qui fait la différence ! Réduisez vos coûts, améliorez votre logistique
                    </h2>
                    <p class="text-black text-lg lg:text-[16px] text-center lg:text-justify">
                        Une plateforme unique pour sécuriser, optimiser et rentabiliser vos opérations. Gérez
                        vos opérations en toute sécurité, avec plus d'efficacité et de profits.
                    </p>
                    <div
                        class="w-full pt-4 space-y-12 md:space-y-0 md:space-x-4 flex flex-col md:flex-row justify-center items-center xl:justify-normal">
                        <p><a href="#"
                                class="px-6 py-4 bg-[#081828] font-semibold hover:bg-blue-950 text-white duration-300 rounded">Commencez
                                Maintenant</a></p>
                        <p><a href="#"
                                class="px-16 md:px-8 py-4 font-semibold border border-[#081828] hover:bg-[#081828] text-[#081828] hover:text-white rounded">En
                                Savoir Plus</a></p>
                    </div>
                </div>

                <!-- Right side - Video -->
                <div class="w-full xl:w-2/5">
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-none p-2 max-w-2xl mx-auto">
                        <video class="w-full h-full object-cover rounded-xl" controls autoplay muted loop>
                            <source src="images/app-ss/videos_presentation.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de vidéos.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Stats Section - Full width below hero content -->
            <div class="w-full bg-[#1B1E3D] rounded-xl overflow-hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Number of deploys -->
                    <div class="p-8 border-b sm:border-r sm:border-b-0 lg:border-b-0 border-gray-700/50">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">Number of deploys</p>
                            <p class="text-white text-4xl font-bold">405</p>
                        </div>
                    </div>

                    <!-- Average deploy time -->
                    <div class="p-8 border-b lg:border-r lg:border-b-0 border-gray-700/50">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">Average deploy time</p>
                            <div class="flex items-baseline space-x-1">
                                <p class="text-white text-4xl font-bold">3.65</p>
                                <span class="text-gray-400">mins</span>
                            </div>
                        </div>
                    </div>

                    <!-- Number of servers -->
                    <div class="p-8 border-b sm:border-r sm:border-b-0 border-gray-700/50">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">Number of servers</p>
                            <p class="text-white text-4xl font-bold">3</p>
                        </div>
                    </div>

                    <!-- Success rate -->
                    <div class="p-8">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">Success rate</p>
                            <p class="text-white text-4xl font-bold">98.5%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content - Fills available space -->
    <main class="flex-grow">
        <!-- Par exemple: -->
        <section class="container mx-auto px-4 py-8">


            <!-------section featured-->
            <section class="w-full px-8 xl:px-0 bg-[#F9F9F9] flex py-14 items-center justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#2A0A55] font-bold text-center uppercase">Niches Solutions</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Niche products for addressing specific
                            tasks
                        </h3>
                        <p class="text-base text-gray-500 text-center ">There are many variations of passages of Lorem
                            Ipsum
                            available,
                            but the majority have suffered alteration in some form.</p>
                    </div>
                    <div class="w-full grid grid-col-4 sm:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-8 py-8">
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Vehicle-leasing-software.png" alt="">

                            <p class="text-xl py-4">
                                Suivi des véhicules en location</p>
                            <p class="text-sm text-gray-500 py-2">Vehicle location tracking for car loans, vehicle
                                leasing, and
                                finance industry.</p>

                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter</a>
                            </div>

                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Agriculture-fleet-tracking.png" alt="">

                            <p class="text-xl py-4">
                                Logiciel de gestion agricole</p>
                            <p class="text-sm text-gray-500 py-2">Control crops rotation and field works with Hecterra.
                            </p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter</a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Delivery-fleet-management.png" alt="">

                            <p class="text-xl py-4">
                                Suivi de services de livraison</p>
                            <p class="text-sm text-gray-500 py-2">We developed Logistics service for you to manage
                                delivery
                                operations</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter</a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Driver-behavior-monitoring.png" alt="">

                            <p class="text-xl py-4">
                                Contrôle de la qualité de conduite</p>
                            <p class="text-sm text-gray-500 py-2">Eco Driving – the solution to monitor driving quality.
                            </p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter</a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Field-employee-tracking.png" alt="">

                            <p class="text-xl py-4">
                                Suivi Personel</p>
                            <p class="text-sm text-gray-500 py-2">WiaTag turns a smartphone into a GPS tracker and
                                allows
                                controlling field operations and mobile staff performance</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter</a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Public-transportation-management.png" alt="">
                            <p class="text-xl py-4">
                                Contrôle des transports publics</p>
                            <p class="text-sm text-gray-500 py-2">NimBus is designed to control fixed routes vehicles.
                            </p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-----other section -->
            <div class="w-full lg:w-5/6 mx-auto bg-white px-8 lg:px-0 py-8 lg:py-24 ">
                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 space-y-8">
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">1,25,000 Customers Using The
                                Application!
                            </h3>
                            <p class="text-[15px] text-gray-400">Collaborate over projects with your team and clients
                                optimised
                                for mobile and tablet don't let slow page speeds
                                drive our innovative platform empowers anyone to convert clicks ou'll publish your first
                                landing
                                page in minutes.</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center">
                        <img src="appvila_icons/app-ss1.png" alt="app-ss1">
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-24">
                        <img src="appvila_icons/app-ss2.png" alt="app-ss1">
                    </div>
                    <div class="col-span-4 space-y-8">
                        <!-- <div class="w-14 h-14 rounded-lg bg-[#2A0A55] shadow"></div> -->
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">Seamless Loyalt</h3>
                            <p class="text-[15px] text-gray-400">Collaborate over projects with your team and clients
                                optimised
                                for mobile and tablet don't let slow page speeds
                                drive our innovative platform empowers anyone to convert clicks ou'll publish your first
                                landing
                                page in minutes.</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 space-y-8">
                        <!-- <div class="w-14 h-14 rounded-lg bg-[#2A0A55] shadow">
                    <i class="lni lni-download-1"></i>
                </div> -->
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">1,25,000 Customers Using The
                                Application!
                            </h3>
                            <p class="text-[15px] text-gray-400">Collaborate over projects with your team and clients
                                optimised
                                for mobile and tablet don't let slow page speeds
                                drive our innovative platform empowers anyone to convert clicks ou'll publish your first
                                landing
                                page in minutes.</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center">
                        <img src="appvila_icons/app-ss1.png" alt="app-ss1">
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-24">
                        <img src="appvila_icons/app-ss2.png" alt="app-ss1">
                    </div>
                    <div class="col-span-4 space-y-8">
                        <!-- <div class="w-14 h-14 rounded-lg bg-[#2A0A55] shadow"></div> -->
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">Seamless Loyalt</h3>
                            <p class="text-[15px] text-gray-400">Collaborate over projects with your team and clients
                                optimised
                                for mobile and tablet don't let slow page speeds
                                drive our innovative platform empowers anyone to convert clicks ou'll publish your first
                                landing
                                page in minutes.</p>
                            <div class="py-4">
                                <a href="#"
                                    class="px-6 py-3 rounded bg-[#2A0A55] hover:bg-[#081828] text-white font-semibold">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full p-8 lg:py-12 flex items-center justify-center bg-[#2A0A55]">
                <div class="w-full xl:w-4/6  space-y-4 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">Trusted by developers from over 80
                        planets
                    </h2>
                    <p class="text-base text-white">There are many variations of passages of Lorem Ipsum available, but
                        the
                        majority.</p>

                    <div
                        class="w-full flex flex-col md:flex-row justify-center md:justify-around items-center space-y-4 md:space-y-0 md:space-x-4 py-4 md:py-8">
                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">100%</h2>
                            <p class="text-white text-lg">satisfaction</p>

                        </div>
                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">120k</h2>
                            <p class="text-white text-lg">Happy Users</p>

                        </div>

                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">125k+</h2>
                            <p class="text-white text-lg">Downloads</p>

                        </div>
                    </div>
                </div>
            </div>
            <!----pricing plan-->
            <section class="w-full px-8 xl:px-0 bg-[#F9F9F9] flex py-14 items-center justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#2A0A55] font-bold text-center uppercase">Abonnement</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Plan d'abonnement</h3>
                        <p class="text-base text-gray-500 text-center ">There are many variations of passages of Lorem
                            Ipsum
                            available, but the majority have suffered alteration in some form.</p>
                    </div>

                </div>
            </section>

            <!------our Team section-->
            <section class="w-full p-8 bg-white flex  justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#2A0A55] font-bold text-center uppercase">Team</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Meat our team</h3>
                        <p class="text-base text-gray-500 text-center ">There are many variations of passages of Lorem
                            Ipsum
                            available, but the majority have suffered alteration in some form.</p>
                    </div>
                    <div class="w-full grid grid-col-4 md:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-8 py-8">
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/team1.jpg" class="w-full object-cover object-center"
                                    alt="team1">
                            </div>
                            <div class="p-6 w-full">
                                <h4 class="text-lg text-[#081828]">Leonard Krasner</h4>
                                <p class="text-base text-[#2A0A55]">Senior Designer</p>
                            </div>
                        </div>
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/team2.jpg" class="w-full object-cover object-center"
                                    alt="team2">
                            </div>
                            <div class="p-6 w-full">
                                <h4 class="text-lg text-[#081828]">Leonard Krasner</h4>
                                <p class="text-base text-[#2A0A55]">Senior Designer</p>
                            </div>
                        </div>
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/team3.jpg" class="w-full object-cover object-center"
                                    alt="team3">
                            </div>
                            <div class="p-6 w-full">
                                <h4 class="text-lg text-[#081828]">Leonard Krasner</h4>
                                <p class="text-base text-[#2A0A55]">Senior Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!------Testimonials section-->

            <section class="w-full px-8 md:px-0 py-4 md:py-8 bg-[#F9F9F9] flex items-center justify-center ">

                <div class="w-full lg:w-5/6 xl:w-3/6 swiper">
                    <div class="flex space-x-2 ">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                    <div class="w-full overflow-hidden swiper-wrapper">
                        <div class="w-full flex items-center overflow-hidden swiper-wrapper">

                            <div class="w-full flex flex-col swiper-slide items-center justify-center space-y-8">
                                <img src="appvila_icons/brand2.svg" width="150" height="150" alt="brand2">
                                <p class="text-lg font-semibold text-center">"It is a long established fact that a
                                    reader will
                                    be
                                    distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has"

                                </p>
                                <div class="w-12 h-12 rounded-full bg-black"></div>
                                <div class="space-y-2 text-center">
                                    <h4 class="">Musharof Chowdhury</h4>
                                    <p class="text-gray-500">CEO - Ayro UI</p>
                                </div>
                            </div>
                            <div class="w-ful flex flex-col swiper-slide items-center justify-center space-y-8">
                                <img src="appvila_icons/brand1.svg" width="150" height="150" alt="brand2">
                                <p class="text-lg font-semibold text-center">"It is a long established fact that a
                                    reader will
                                    be
                                    distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has"

                                </p>
                                <div class="w-12 h-12 rounded-full overflow-hidden">
                                    <img src="appvila_icons/testi2.jpg" class="w-full h-full object-cover object-center"
                                        alt="testi2">
                                </div>
                                <div class="space-y-2 text-center">
                                    <h4 class="">Musharof Chowdhury</h4>
                                    <p class="text-gray-500">CEO - GrayGrids</p>
                                </div>
                            </div>
                            <div class="w-full flex flex-col swiper-slide items-center justify-center space-y-8">
                                <img src="appvila_icons/brand3.svg" width="150" height="150" alt="brand3">
                                <p class="text-lg font-semibold text-center">"It is a long established fact that a
                                    reader will
                                    be
                                    distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has"

                                </p>
                                <div class="w-12 h-12 rounded-full overflow-hidden">
                                    <img src="appvila_icons/testi3.jpg" class="w-full h-full object-cover object-center"
                                        alt="testi2">
                                </div>
                                <div class="space-y-2 text-center">
                                    <h4 class="">Naimur Rahman</h4>
                                    <p class="text-gray-500">CEO - WpthemesGrid</p>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </section>
            <div class="w-full p-8 lg:py-24 flex items-center justify-center bg-[#2A0A55]">
                <div class="w-full lg:w-5/6 xl:w-3/6  space-y-4 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">Install Appvilla and Start Using
                    </h2>
                    <div class="text-center w-full lg:w-5/6 mx-auto py-4">
                        <p class="text-base text-white">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable.</p>
                    </div>

                    <div class="w-full flex justify-center  items-center space-x-4 py-4">
                        <button
                            class="px-6 py-3 rounded bg-white text-[#2A0A55] hover:bg-[#081828] hover:text-white font-semibold">App
                            Store</button>
                        <button
                            class="px-6 py-3  rounded border border-white text-[#fff] hover:bg-[#fff] hover:text-[#2A0A55] font-semibold">Google
                            Play</button>
                    </div>
                </div>
            </div>

            <section class="w-full p-8 lg:py-12 bg-white  flex flex-col items-center justify-center">
                <div class="w-full xl:w-5/6 space-y-8  py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#2A0A55] font-bold text-center uppercase">FAQ</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Frequently Asked Questions</h3>
                        <p class="text-base text-gray-500 text-center ">There are many variations of passages of Lorem
                            Ipsum
                            available, but the majority have suffered alteration in some form.</p>
                    </div>

                </div>


                <div class=" w-full flex flex-col  items-center xl:p-8 space-y-6">
                    <div id="container"
                        class="mx-auto border border-[#dfdddd] w-full flex overflow-hidden flex-col relative  rounded-xl">
                        <div class="flex justify-between items-center w-full p-4 cursor-pointer" id="switch">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-8 h-8 flex items-center justify-center font-semibold bg-white rounded-full border">
                                    01</div>
                                <h3 class="text-[#081828] font-semibold text-[16px]" id="title">
                                    How Do I Contact Customer Services?
                                </h3>
                            </div>
                            <svg id="btn" class=" cursor-pointer" xmlns="http://www.w3.org/2000/svg" heigth="22px"
                                viewBox="0 -960 960 960" width="22px" fill="#5f6368">
                                <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                            </svg>

                        </div>
                        <div id="p"
                            class="p-8 lg:p-12 text-base text-gray-600 w-full hidden bg-[#f0f0ef] text-left space-y-8">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa
                                nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iure ab nisi, magnam
                                vitae.
                                Laboriosam laborum suscipit recusandae officia laudantium,
                                consectetur adipisci voluptates doloremque quisquam. Id rerum iusto reprehenderit
                                assumenda!</p>
                        </div>
                    </div>
                    <div id="container"
                        class="mx-auto border border-[#dfdddd] w-full flex overflow-hidden flex-col relative  rounded-xl">
                        <div class="flex justify-between items-center w-full p-4 cursor-pointer" id="switch">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-8 h-8 flex items-center justify-center font-semibold bg-white rounded-full border">
                                    02</div>
                                <h3 class="text-[#081828] font-semibold text-[16px]" id="title">
                                    Material types can you work with?
                                </h3>
                            </div>
                            <svg id="btn" class=" cursor-pointer" xmlns="http://www.w3.org/2000/svg" heigth="22px"
                                viewBox="0 -960 960 960" width="22px" fill="#5f6368">
                                <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                            </svg>

                        </div>
                        <div id="p" class="hidden text-base text-gray-600 w-full p-12 bg-[#f0f0ef] text-left space-y-8">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa
                                nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iure ab nisi, magnam
                                vitae.
                                Laboriosam laborum suscipit recusandae officia laudantium,
                                consectetur adipisci voluptates doloremque quisquam. Id rerum iusto reprehenderit
                                assumenda!</p>
                        </div>
                    </div>
                    <div id="container"
                        class="mx-auto border border-[#dfdddd] w-full flex overflow-hidden flex-col relative  rounded-xl">
                        <div class="flex justify-between items-center w-full p-4 cursor-pointer" id="switch">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-8 h-8 flex items-center justify-center font-semibold bg-white rounded-full border">
                                    03</div>
                                <h3 class="text-[#081828] font-semibold text-[16px]" id="title">
                                    Can I have multiple activities in a single feature?
                                </h3>
                            </div>
                            <svg id="btn" class=" cursor-pointer" xmlns="http://www.w3.org/2000/svg" heigth="22px"
                                viewBox="0 -960 960 960" width="22px" fill="#5f6368">
                                <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                            </svg>

                        </div>
                        <div id="p" class="hidden text-base text-gray-600 w-full p-12 bg-[#f0f0ef] text-left space-y-8">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iure ab nisi, magnam
                                vitae.
                                Laboriosam laborum suscipit recusandae officia laudantium,
                                consectetur adipisci voluptates doloremque quisquam. Id rerum iusto reprehenderit
                                assumenda!</p>
                        </div>
                    </div>
                    <div id="container"
                        class="mx-auto border border-[#dfdddd] w-full flex overflow-hidden flex-col relative  rounded-xl">
                        <div class="flex justify-between items-center w-full cursor-pointer p-4" id="switch">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-8 h-8 flex items-center justify-center font-semibold bg-white rounded-full border">
                                    04</div>
                                <h3 class="text-[#081828] font-semibold text-[16px]" id="title">
                                    How Clients Can Consult With online?
                                </h3>
                            </div>
                            <svg id="btn" xmlns="http://www.w3.org/2000/svg" heigth="22px" viewBox="0 -960 960 960"
                                width="22px" fill="#5f6368">
                                <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                            </svg>

                        </div>
                        <div id="p" class="hidden text-base text-gray-600 w-full p-12 bg-[#f0f0ef] text-left space-y-8">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa
                                nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et.
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, beatae placeat assumenda
                                velit
                                fugit illo ut hic at veritatis nam.</p>
                        </div>
                    </div>
                    <div id="container"
                        class="mx-auto border border-[#dfdddd] w-full flex overflow-hidden flex-col relative  rounded-xl">
                        <div class="flex justify-between items-center w-full cursor-pointer p-4" id="switch">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-8 h-8 flex items-center justify-center font-semibold bg-white rounded-full border">
                                    05</div>
                                <h3 class="text-[#081828] font-semibold text-[16px]" id="title">
                                    Can I share resources between features?
                                </h3>
                            </div>
                            <svg id="btn" xmlns="http://www.w3.org/2000/svg" heigth="22px" viewBox="0 -960 960 960"
                                width="22px" fill="#5f6368">
                                <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                            </svg>

                        </div>
                        <div id="p" class="hidden text-base text-gray-600 w-full p-12 bg-[#f0f0ef] text-left space-y-8">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa
                                nesciunt
                                laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et.
                            </p>

                        </div>
                    </div>

                </div>

            </section>

            <!------our Team section-->
            <section class="w-full p-8 bg-[#F9F9F9] flex  justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#2A0A55] font-bold text-center uppercase">blog</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Our Latest News</h3>
                        <p class="text-base text-gray-500 text-center ">There are many variations of passages of Lorem
                            Ipsum
                            available, but the majority have suffered alteration in some form.</p>
                    </div>
                    <div class="w-full grid grid-col-4 md:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-8 py-8">
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/blog-1.jpg"
                                    class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                            </div>
                            <div class="p-6 w-full space-y-4">

                                <p class="text-base text-[#2A0A55]">Blog</p>
                                <h4 class="text-xl font-bold text-[#081828] hover:text-[#2A0A55]">Boost your conversion
                                    rate
                                </h4>
                                <p class="text-[15px] text-gray-500">Lorem ipsum dolor sit amet, adipscing elitr, sed
                                    diam
                                    nonumy eirmod tempor ividunt dolore magna.</p>
                            </div>
                            <div class="w-full flex items-center space-x-4 p-6">
                                <div class="w-14 h-14 rounded-full bg-gray-100 overflow-hidden">
                                    <img src="appvila_icons/comment1.jpg"
                                        class="w-full h-full object-cover object-center" alt="comment1">
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[#081828] hover:text-[#2A0A55] text-base cursor-pointer">Roel
                                        Aufderhar</p>
                                    <div class="flex items-center text-gray-500 hover:text-[#2A0A55] text-sm">
                                        Mar 15,2023 <div class="w-1 h-1 mx-3 rounded-full bg-gray-200"></div>5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/blog-2.jpg"
                                    class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                            </div>
                            <div class="p-6 w-full space-y-4">

                                <p class="text-base text-[#2A0A55]">Video</p>
                                <h4 class="text-xl font-bold text-[#081828] hover:text-[#2A0A55]">How to use search
                                    engine</h4>
                                <p class="text-[15px] text-gray-500">Lorem ipsum dolor sit amet, adipscing elitr, sed
                                    diam
                                    nonumy eirmod tempor ividunt dolore magna.</p>
                            </div>
                            <div class="w-full flex items-center space-x-4 p-6">
                                <div class="w-14 h-14 rounded-full bg-gray-100 overflow-hidden">
                                    <img src="appvila_icons/comment2.jpg"
                                        class="w-full h-full object-cover object-center" alt="comment1">
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[#081828] hover:text-[#2A0A55] text-base cursor-pointer">Jenifer
                                        Zuliya</p>
                                    <div class="flex items-center text-gray-500 hover:text-[#2A0A55] text-sm">
                                        Feb 10,2023 <div class="w-1 h-1 mx-3 rounded-full bg-gray-200"></div>7 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <div class=" w-full ">
                                <img src="appvila_icons/blog-3.jpg"
                                    class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                            </div>
                            <div class="p-6 w-full space-y-4">

                                <p class="text-base text-[#2A0A55]">Marketing</p>
                                <h4 class="text-xl font-bold text-[#081828] hover:text-[#2A0A55]">Awesome ways to boost
                                    sales
                                </h4>
                                <p class="text-[15px] text-gray-500">Lorem ipsum dolor sit amet, adipscing elitr, sed
                                    diam
                                    nonumy eirmod tempor ividunt dolore magna.</p>
                            </div>
                            <div class="w-full flex items-center space-x-4 p-6">
                                <div class="w-14 h-14 rounded-full bg-gray-100 overflow-hidden">
                                    <img src="appvila_icons/comment3.jpg"
                                        class="w-full h-full object-cover object-center" alt="comment1">
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[#081828] hover:text-[#2A0A55] text-base cursor-pointer"> Roel
                                        Aufderhar</p>
                                    <div class="flex items-center text-gray-500 hover:text-[#2A0A55] text-sm">
                                        Jan 20,2023 <div class="w-1 h-1 mx-3 rounded-full bg-gray-200"></div>6 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full p-4 space-y-4">
                <h3 class="text-3xl text-gray-800 font-bold text-center">Abo-tracking key functionality</h3>
                <div class="flex flex-wrap items-center justify-center space-x-4 lg:space-x-12 py-6">
                    <div class="group  space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Real-time fleet tracking</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Advanced reports</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Comprehensive dashboard</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Fuel control</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Route optimization</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Sensor data reading</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Geofence control</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Driver behavior monitoring</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                    <div class="group space-y-1">
                        <a href="#" class="block text-lg text-gray-500">Video telematics</a>
                        <div class="w-auto h-[2px] group-hover:bg-blue-600"></div>
                    </div>
                </div>
                <div
                    class="w-full lg:w-3/4 h-[300px] sm:h-[440px] lg:h-[600px] border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                    <img src="icons/comprehensive-dashboard.png" alt="comprehensive-dashboard"
                        class="w-full h-full object-cover object-center">
                </div>
                <div class="lg:flex justify-center items-center space-y-2 lg:space-x-4 lg:space-y-0 lg:w-3/4 mx-auto">
                    <div class="py-4 px-8 lg:w-1/2 bg-gray-100 rounded-2xl text-lg text-blue-950">Access all
                        fleet-related
                        data
                        in one place</div>
                    <div class="py-4 px-8 lg:w-1/2 bg-gray-100 rounded-2xl text-lg text-blue-950">Customized dashboard
                        with
                        various widgets</div>
                </div>
                <div class="w-full flex justify-center items-center py-4">
                    <button
                        class="w-full md:w-44 h-16 text-[18px] group xl:text-lg mt-4 outline-none border-none rounded-2xl duration-300 shadow flex items-center justify-center  text-white bg-blue-600 hover:bg-blue-800">Get
                        Started <img class="w-6 h-6 mx-2 group-hover:translate-x-2 group-hover:duration-300"
                            src="icons/right-arrow.png" alt="arrow"></button>
                </div>
            </section>

            <!-- Form Section -->
            <section class="min-h-screen bg-[#1B1E3D] flex items-center justify-center p-4">
                <div class="w-full max-w-2xl bg-white rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-[#1B1E3D] mb-6">
                        Veuillez remplir un formulaire de demande pour commencer à travailler avec Abo-Tracking, un
                        logiciel de gestion de flotte
                    </h2>

                    <!-- Usage Type Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <button
                            class="flex-1 flex items-center justify-center gap-2 px-6 py-3 rounded-lg border-2 border-blue-100 bg-blue-50 text-blue-600 hover:bg-blue-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            Un usage professionnel
                        </button>
                        <button
                            class="flex-1 flex items-center justify-center gap-2 px-6 py-3 rounded-lg border-2 border-gray-200 hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Un usage personnel
                        </button>
                    </div>

                    <!-- Radio Group -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Pourquoi êtes-vous intéressé par Abo-Tracking ?*
                        </h3>

                        <div class="space-y-4">
                            <label
                                class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors">
                                <input type="radio" name="usage"
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <span class="ml-3 text-gray-700">
                                    Nous sommes propriétaires d'une flotte et souhaitons suivre les véhicules de notre
                                    entreprise
                                </span>
                            </label>

                            <label
                                class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors">
                                <input type="radio" name="usage"
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <span class="ml-3 text-gray-700">
                                    Nous allons démarrer une entreprise de gestion de flotte et suivre les véhicules de
                                    nos clients
                                </span>
                            </label>

                            <label
                                class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-colors">
                                <input type="radio" name="usage"
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <span class="ml-3 text-gray-700">
                                    Nous sommes déjà présents dans le secteur de la gestion de flotte, mais souhaitons
                                    élargir notre portefeuille de produits
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Next Button -->
                    <div class="flex justify-end mt-8">
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Suivant
                        </button>
                    </div>
                </div>
            </section>

        </section>
    </main>
    <!-- Footer Section -->
    <footer class="w-full bg-[#081828] pt-20">
        <!-- Newsletter Section -->
        <div class="container mx-auto px-4 mb-16">
            <div class="max-w-6xl mx-auto p-8 rounded-xl border border-gray-700/50 bg-[#0a1f35]">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="space-y-3">
                        <h2 class="text-2xl md:text-3xl font-bold text-white">
                            Abonnez-vous à notre Newsletter
                        </h2>
                        <p class="text-gray-300 text-sm md:text-base">
                            Recevez nos dernières actualités et offres directement dans votre boîte mail.
                        </p>
                    </div>
                    <div class="w-full md:w-auto flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Votre adresse email"
                            class="w-full sm:w-80 px-4 py-3 rounded-lg bg-gray-700/50 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#2A0A55]">
                        <button
                            class="w-full sm:w-auto px-6 py-3 bg-[#2A0A55] hover:bg-[#3B1B66] text-white font-semibold rounded-lg transition duration-300">
                            S'abonner
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-2">
                        <img src="images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                        <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Votre bouclier GPS-4G à votre portée. Solutions de tracking professionnel pour votre sécurité.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-facebook"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-twitter-old"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-linkedin"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="pages/bouquets.html" class="text-gray-400 hover:text-white transition-colors">Bouquets</a></li>
                        <li><a href="pages/support.html" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                        <li><a href="pages/contact.html" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="pages/solutions/leasing.html" class="text-gray-400 hover:text-white transition-colors">Leasing de véhicules</a></li>
                        <li><a href="pages/solutions/hecterra.html" class="text-gray-400 hover:text-white transition-colors">Agriculture intelligente</a></li>
                        <li><a href="pages/solutions/logistics.html" class="text-gray-400 hover:text-white transition-colors">Gestion des flottes</a></li>
                        <li><a href="pages/solutions/ecodriving.html" class="text-gray-400 hover:text-white transition-colors">Eco Driving</a></li>
                        <li><a href="pages/solutions/fleetrun.html" class="text-gray-400 hover:text-white transition-colors">Maintenance de flotte</a></li>
                        <li><a href="pages/solutions/wiatag.html" class="text-gray-400 hover:text-white transition-colors">Équipes terrain</a></li>
                        <li><a href="pages/solutions/nimbus.html" class="text-gray-400 hover:text-white transition-colors">Transports publics</a></li>
                        <li><a href="pages/solutions/fuel.html" class="text-gray-400 hover:text-white transition-colors">Gestion carburant</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-phone"></i>
                            <span>+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-envelope-1"></i>
                            <span>contact@abo-tracking.com</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-map-marker-5"></i>
                            <span>Paris, France</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="py-8 border-t border-gray-800 text-center">
                <p class="text-gray-400 text-sm">
                    © 2025 Abo-Tracking. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>



    <section class="w-full px-8 lg:px-0 flex items-center justify-center">
        <div class="w-full lg:w-5/6 flex items-center justify-between">
            <img src="" alt="">
        </div>
    </section>
    <script>
        let header = document.querySelector("header");
        let topnav = document.querySelector("#topnav");
        let button = document.querySelector("#contain");

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.backgroundColor = "#2A0A55";
                topnav.style.backgroundColor = "#2A0A55";
            } else {
                button.style.backgroundColor = "transparent";
                topnav.style.backgroundColor = "#2A0A55";
            }
        }

        let containers = document.querySelectorAll('#container');

        containers.forEach(container => {
            let button = container.querySelector('#btn');
            let ctn = container.querySelector('#switch');
            let text = container.querySelector('#p');
            let title = container.querySelector('#title');
            ctn.addEventListener('click', () => {
                text.classList.toggle('active');
                ctn.classList.toggle('active');
                button.classList.toggle('active');
                title.classList.toggle('active');

            });
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
        const mobileMenu = document.querySelector('[data-mobile-menu]');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Dropdown Menus
        const dropdownButtons = document.querySelectorAll('[data-dropdown-button]');
        
        dropdownButtons.forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('[data-dropdown]')) {
                document.querySelectorAll('[data-dropdown-menu]').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
        });
    </script>
</body>

</html>