<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abo -Tracking </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #switch.active {
            background-color: #1B1E3D;
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

<?php include 'partials/header.php';?>
   

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
                            <p class="text-gray-400 text-sm">véhicules connectés</p>
                            <p class="text-white text-4xl font-bold">4 079 319</p>
                        </div>
                    </div>

                    <!-- Average deploy time -->
                    <div class="p-8 border-b lg:border-r lg:border-b-0 border-gray-700/50">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">entreprises partenaires</p>
                            <div class="flex items-baseline space-x-1">
                                <p class="text-white text-4xl font-bold">2 700+</p>
                            </div>
                        </div>
                    </div>

                    <!-- Number of servers -->
                    <div class="p-8 border-b sm:border-r sm:border-b-0 border-gray-700/50">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">pays atteints</p>
                            <p class="text-white text-4xl font-bold">160</p>
                        </div>
                    </div>

                    <!-- Success rate -->
                    <div class="p-8">
                        <div class="space-y-2">
                            <p class="text-gray-400 text-sm">modèles d’appareils compatibles</p>
                            <p class="text-white text-4xl font-bold">3 700+</p>
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
            <!-- SECTION DE A PROPOS DE NOUS  -->
            <section class="w-full p-8 bg-white dark:bg-gray-900">
                <div class="container px-6 py-10 mx-auto">
                    <div class="lg:-mx-6 lg:flex lg:items-center">
                        <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[36rem]" src="images/bouquets/bouquet2.jpg" alt="">

                        <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                            <p class="text-5xl font-semibold text-blue-500 ">A propos de nous</p>

                            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl lg:w-96">
                                Help us improve our productivity
                            </h1>

                            <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 ">
                                “ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                                tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                                aperiam dolorum, obcaecati corrupti aspernatur a. ”

                                “ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero ad
                                tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum, culpa
                                aperiam dolorum, obcaecati corrupti aspernatur a. ”
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <!-------section featured-->
            <section class="w-full px-8 xl:px-0 bg-[#F9F9F9] flex py-14 items-center justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#1B1E3D] font-bold text-center uppercase">Solutions deNiches</p>
                        <h3 class="text-center text-4xl font-bold text-[#081828]">
                            Des produits de niche pour des tâches spécifiques
                        </h3>
                    </div>
                    <div class="w-full grid grid-col-4 sm:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-8 py-8">
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Vehicle-leasing-software.png" alt="">

                            <p class="text-xl py-4">
                                Suivi des véhicules en location</p>
                            <p class="text-sm text-gray-500 py-2">
                                Suivi de location de véhicules pour les prêts automobiles, la location et l'industrie financière.
                            </p>

                            <div class="py-4">
                                <a href="pages/solutions/leasing.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>

                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Agriculture-fleet-tracking.png" alt="">

                            <p class="text-xl py-4">
                                Logiciel de gestion agricole</p>
                            <p class="text-sm text-gray-500 py-2">
                                Contrôler la rotation des cultures et des travaux agricoles avec Hecterra.
                            </p>
                            <div class="py-4">
                                <a href="pages/solutions/hecterra.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Delivery-fleet-management.png" alt="">

                            <p class="text-xl py-4">
                                Suivi de services de livraison</p>
                            <p class="text-sm text-gray-500 py-2">
                                Nous avons développé des services logistique pour vous permettre de gérer les opérations de livraisons
                            </p>
                            <div class="py-4">
                                <a href="pages/solutions/fleetrun.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Driver-behavior-monitoring.png" alt="">

                            <p class="text-xl py-4">
                                Contrôle de la qualité de conduite
                            </p>
                            <p class="text-sm text-gray-500 py-2">
                                Eco Driving La solution pour surveiller la qualité de conduite.
                            </p>
                            <div class="py-4">
                                <a href="pages/solutions/ecodriving.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Field-employee-tracking.png" alt="">

                            <p class="text-xl py-4">
                                Suivi Personel
                            </p>
                            <p class="text-sm text-gray-500 py-2">
                                WiaTag transforme un smartphone en traceur GPS et permet de contrôler les opérations sur le terrain.
                            </p>
                            <div class="py-4">
                                <a href="pages/solutions/wiatag.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Consulter
                                </a>
                            </div>
                        </div>
                        <div
                            class="col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl p-8 rounded-lg space-y-4">
                            <img src="images/solution/Public-transportation-management.png" alt="">
                            <p class="text-xl py-4">
                                Contrôle des transports publics</p>
                            <p class="text-sm text-gray-500 py-2">
                                NimBus est conçu pour contrôler les véhicules sur des itinéraires fixes.
                            </p>
                            <div class="py-4">
                                <a href="pages/solutions/nimbus.html" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
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
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">
                                Solution adaptée à tous les secteurs
                            </h3>
                            <p class="text-[15px] text-gray-400">
                                Le logiciel de gestion de flotte automobile Abo-Tracking répond à des projets variés, 
                                allant du suivi en temps réel à la numérisation complète et à l’intelligence d’affaires
                            </p>
                            <div class="py-4">
                                <a href="https://wa.me/237698761410" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Contactez-Nous
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-15 border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                        <img src="images/bouquets/bouquet1.jpg" alt="app-ss1">
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-15 border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                        <img src="images/bouquets/bouquet2.jpg" alt="app-ss1">
                    </div>
                    <div class="col-span-4 space-y-8">
                        <!-- <div class="w-14 h-14 rounded-lg bg-[#1B1E3D] shadow"></div> -->
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">Solution agnostique en termes de matériel</h3>
                            <p class="text-[15px] text-gray-400">
                                Abo-Tracking s’intègre avec la majorité des modèles d’appareils GPS, 
                                qu’il s’agisse de petits traceurs pour scooters ou d’appareils complexes 
                            </p>
                            <div class="py-4">
                                <a href="https://wa.me/237698761410" class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Contactez-Nous
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 space-y-8">
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">Intégrations fluides
                            </h3>
                            <p class="text-[15px] text-gray-400">
                                Grâce à son SDK et son API ouverte, Abo-Tracking permet de créer des solutions télématiques sur mesure et de les intégrer à d’autres systèmes
                            </p>
                            <div class="py-4">
                                <a href="https://wa.me/237698761410"
                                    class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">Contactez-Nous</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-15 border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                        <img src="images/bouquets/bouquet3.jpg" alt="app-ss1">
                    </div>
                </div>

                <div class="w-full hidden lg:flex h-24"></div>

                <div class="w-full grid grid-cols-4 lg:grid-cols-8 grid-flow-row gap-8 xl:gap-16 items-center ">
                    <div class="col-span-4 sm:px-8 lg:px-0 flex justify-center py-15 border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                        <img src="images/bouquets/bouquet4.jpg" alt="app-ss1" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="col-span-4 space-y-8">
                        <!-- <div class="w-14 h-14 rounded-lg bg-[#1B1E3D] shadow"></div> -->
                        <div class="space-y-8 w-full">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#081828]">Conseil technique</h3>
                            <p class="text-[15px] text-gray-400">
                                Les partenaires bénéficient d'une assistance technique en cinq langues, ainsi que d'une assistance à la mise en œuvre de projets 
                            </p>
                            <div class="py-4">
                                <a href="https://wa.me/237698761410"
                                    class="px-6 py-3 rounded bg-[#1B1E3D] hover:bg-[#081828] text-white font-semibold">
                                    Contactez-Nous
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full p-8 lg:py-12 flex items-center justify-center bg-[#1B1E3D]">
                <div class="w-full xl:w-4/6  space-y-4 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">
                        Abo-Tracking : une solution unique pour des besoins variés
                    </h2>
                    <p class="text-base text-white">
                    </p>

                    <div
                        class="w-full flex flex-col md:flex-row justify-center md:justify-around items-center space-y-4 md:space-y-0 md:space-x-4 py-4 md:py-8">
                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">100%</h2>
                            <p class="text-white text-lg">satisfaction</p>

                        </div>
                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">120k</h2>
                            <p class="text-white text-lg">Utilisateurs heureux</p>

                        </div>

                        <div class="space-y-2">
                            <h2 class="font-extrabold text-3xl text-white">125k+</h2>
                            <p class="text-white text-lg">Téléchargements</p>

                        </div>
                    </div>
                </div>
            </div>

            <!------our Team section-->
            <section class="w-full p-8 bg-white flex  justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Notre Equipe</h3>
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
                                <p class="text-base text-[#1B1E3D]">Senior Designer</p>
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
                                <p class="text-base text-[#1B1E3D]">Senior Designer</p>
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
                                <p class="text-base text-[#1B1E3D]">Senior Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
            <div class="w-full p-8 lg:py-24 flex items-center justify-center bg-[#1B1E3D]">
                <div class="w-full lg:w-5/6 xl:w-3/6  space-y-4 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">
                        Installer Abo-Tracking et commencer à l'utiliser
                    </h2>

                    <div class="w-full flex justify-center  items-center space-x-4 py-4">
                        <button class="px-6 py-3 rounded bg-white text-[#1B1E3D] hover:bg-[#081828] hover:text-white font-semibold">
                            <a href="tel:+237698761410">Ecrivez-nous</a>
                        </button>
                        <button class="px-6 py-3  rounded border border-white text-[#fff] hover:bg-[#fff] hover:text-[#1B1E3D] font-semibold">
                            <a href="https://wa.me/237698761410">Chat en Direct</a>
                        </button>
                    </div>
                </div>
            </div>

            <section class="w-full p-8 lg:py-12 bg-white  flex flex-col items-center justify-center">
                <div class="w-full xl:w-5/6 space-y-8  py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <p class="text-lg text-[#1B1E3D] font-bold text-center uppercase">FAQ</p>
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
                                    Comment contacter le service client ?
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
                                    Types de matériaux avec lesquels vous pouvez travailler ?
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
                                    Puis-je avoir plusieurs activités dans une seule fonctionnalité ?
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
                                    Comment les clients peuvent-ils consulter en ligne ?
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
                                    Puis-je partager des ressources entre les fonctionnalités ?
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

            <section class="bg-white dark:bg-gray-900">
                <div class="container px-6 py-10 mx-auto">
                    <div class="lg:-mx-6 lg:flex lg:items-center">
                        <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[36rem]" src="images/app-ss/banner_x3.jpg" alt="">
            
                        <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                            <p class="text-5xl font-semibold text-blue-500 ">Notre Equipe</p>
            
                            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl lg:w-96">
                                Help us improve our productivity
                            </h1>
            
                            <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 ">
                                    The company brings together top-tier industry experts: software developers, analysts, 
                                    cartography and GPS hardware specialists, as well as managers offering guidance to clients on 
                                    leveraging vehicle tracking systems across different business sectors. Working together, 
                                    we create cutting-edge products that are utilized by millions of users worldwide.
                                    As Gurtam continues to grow, we are actively seeking new talents to join us. 
                                    Don’t miss out the opportunity to become part of our team!
                            </p>
            
                        
                        </div>
                    </div>
                </div>
            </section>

            <!------SECTION BLOG -->
            <section class="w-full p-8 bg-[#F9F9F9] flex  justify-center">
                <div class="w-full xl:w-5/6 space-y-8 py-8">
                    <div class="space-y-4 w-full lg:w-3/6 mx-auto">
                        <h3 class="text-center text-4xl font-bold text-[#081828]">Nos post sur les réseaux sociaux</h3>
                        <p class="text-base text-gray-500 text-center ">
                            Nous postons constemment des nouvelles sur nos pages de réseaux sociaux
                        </p>
                    </div>
                    <div class="w-full grid grid-col-4 md:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-8 py-8">
                        <div class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <a href="http://">
                                <div class=" w-full ">
                                    <img src="images/app-ss/blog-1.jpg" class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                                </div>
                                <div class="p-6 w-full space-y-4">
    
                                    <p class="text-base text-[#1B1E3D]">Blog</p>
                                    <h4 class="text-xl font-bold text-[#081828] hover:text-[#1B1E3D]">Boost your conversion rate
                                    </h4>
                                    <p class="text-[15px] text-gray-500">
                                        Lorem ipsum dolor sit amet, adipscing elitr, sed
                                        diam
                                        nonumy eirmod tempor ividunt dolore magna.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <a href="http://">
                                <div class=" w-full ">
                                    <img src="appvila_icons/blog-2.jpg"
                                        class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                                </div>
                                <div class="p-6 w-full space-y-4">
    
                                    <p class="text-base text-[#1B1E3D]">Video</p>
                                    <h4 class="text-xl font-bold text-[#081828] hover:text-[#1B1E3D]">How to use search
                                        engine</h4>
                                    <p class="text-[15px] text-gray-500">Lorem ipsum dolor sit amet, adipscing elitr, sed
                                        diam
                                        nonumy eirmod tempor ividunt dolore magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-4 overflow-hidden lg:col-span-4 bg-white border border-gray-200 hover:-translate-y-4 duration-150 hover:shadow-xl rounded-lg">
                            <a href="http://">
                                <div class=" w-full ">
                                    <img src="appvila_icons/blog-3.jpg"
                                        class="w-full object-cover object-center hover:scale-110 duration-500" alt="blog-1">
                                </div>
                                <div class="p-6 w-full space-y-4">
    
                                    <p class="text-base text-[#1B1E3D]">Marketing</p>
                                    <h4 class="text-xl font-bold text-[#081828] hover:text-[#1B1E3D]">Awesome ways to boost
                                        sales
                                    </h4>
                                    <p class="text-[15px] text-gray-500">Lorem ipsum dolor sit amet, adipscing elitr, sed
                                        diam
                                        nonumy eirmod tempor ividunt dolore magna.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="w-full p-4 space-y-4">
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
                <div class="w-full lg:w-3/4 h-[300px] sm:h-[440px] lg:h-[600px] border-[8px] border-blue-900 rounded-3xl overflow-hidden mx-auto">
                    <img src="icons/comprehensive-dashboard.png" alt="comprehensive-dashboard" class="w-full h-full object-cover object-center">
                </div>
                <div class="lg:flex justify-center items-center space-y-2 lg:space-x-4 lg:space-y-0 lg:w-3/4 mx-auto">
                    <div class="py-4 px-8 lg:w-1/2 bg-gray-100 rounded-2xl text-lg text-blue-950">Access all
                        fleet-related data in one place
                    </div>
                    <div class="py-4 px-8 lg:w-1/2 bg-gray-100 rounded-2xl text-lg text-blue-950">Customized dashboard
                        with various widgets
                    </div>
                </div>
                <div class="w-full flex justify-center items-center py-4">
                    <button class="w-full md:w-44 h-16 text-[18px] group xl:text-lg mt-4 outline-none border-none rounded-2xl duration-300 shadow flex items-center justify-center  text-white bg-blue-600 hover:bg-blue-800">
                        Commencer 
                        <img class="w-6 h-6 mx-2 group-hover:translate-x-2 group-hover:duration-300" src="icons/right-arrow.png" alt="arrow">
                    </button>
                </div>
            </section> -->

            <?php include 'partials/demande.php';?>
            
        </section>
    </main>
    <?php include 'partials/footer.php' ?>



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
                button.style.backgroundColor = "#1B1E3D";
                topnav.style.backgroundColor = "#1B1E3D";
            } else {
                button.style.backgroundColor = "transparent";
                topnav.style.backgroundColor = "#1B1E3D";
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
    <script src="js/translations.js"></script>


</body>

</html>