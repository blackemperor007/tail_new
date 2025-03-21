<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getstarted</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="../output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

    <script>
        (function () {
            emailjs.init("fbNcuC5hteE19n1l8"); // Remplacez par votre USER_ID
        })();


    </script>

    <style>
        .check:checked+span {
            border: 1px solid #0071e3;
            background: #e0e9f5;
            color: #0071e3;
        }
    </style>
</head>

<body class="bg-[#EAEFF2]" style="font-family:Montserrat, sans-serif" ;>
    <header class="w-full fixed z-20 bg-white">
        <div class="w-full items-center flex justify-between h-14 px-4 shadow xl:shadow-none">
            <div class="flex space-x-8 items-center">
                <div class="w-24">
                    <img src="../images/logo-2.png" alt="brand_logo">

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
                    <img src="../icons/search-interface-symbol.png" width="20" height="20" alt="">
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
                        <img src="../icons/menu.png" width="20" height="20" alt="menu_bar">
                    </div>
                </div>
            </div>

        </div>


        <div class="w-full py-8 bg-[#2A0A55] flex items-center justify-center">

            <nav class="w-full px-4 lg:px-8 flex justify-between items-center">
                <!---contain logo-->
                <div class="flex items-center space-x-2">
                    <img src="../images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                    <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                </div>
                <div class=" hidden xl:flex lg:space-x-8">
                    <!-- Home Link -->
                    <a href="../index.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        <span>Home</span>
                    </a>

                    <!-- Solutions Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                            <span>Solutions</span>
                        </button>

                        <!-- Solutions Dropdown Menu -->
                        <div
                            class="absolute top-full left-0 w-[560px] bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 -translate-y-2 group-hover:translate-y-1">
                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Colonne 1 -->
                                    <div>
                                        <ul class="space-y-1">
                                            <!-- Leasing de véhicules -->
                                            <li>
                                                <a href="solutions/leasing.html"
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
                                                <a href="solutions/hecterra.html"
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
                                                <a href="solutions/logistics.html"
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
                                                <a href="solutions/ecodriving.html"
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
                                                <a href="solutions/fleetrun.html"
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
                                                <a href="solutions/wiatag.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-users text-lg text-indigo-600 group-hover/item:text-indigo-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">WiaTag</span>
                                                        <span class="text-sm text-gray-500">Suivi des équipes
                                                            terrain</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Transports publics -->
                                            <li>
                                                <a href="solutions/nimbus.html"
                                                    class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div
                                                        class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center">
                                                        <i
                                                            class="lni lni-bus text-lg text-teal-600 group-hover/item:text-teal-700"></i>
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-gray-800 font-medium group-hover/item:text-blue-600">NimBus</span>
                                                        <span class="text-sm text-gray-500">Surveillance des transports
                                                            publics</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Gestion carburant -->
                                            <li>
                                                <a href="solutions/fuel.html"
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
                    <a href="bouquets.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">

                        <span>Bouquets</span>
                    </a>

                    <!-- Support Link -->
                    <a href="support.html"
                        class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">

                        <span>Support</span>
                    </a>

                    <!-- Contact Link -->
                    <a href="contact.html"
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


    <div class="w-full h-24"></div>
    <div class="w-full flex items-center justify-center py-24 bg-gray-50">
        <div class="w-full grid grid-cols-4 md:grid-cols-8 grid-flow-row gap-8 items-center">
            <div class="col-span-4 md:col-span-3 space-y-8 px-4">
                <h1 class="text-4xl font-bold text-[#05055D]">Request Wialon now</h1>
                <div class="w-full space-y-4">
                    <div class="w-full">
                        <p class="text-base text-[#404853]">Discover why businesses worldwide trust Wialon for fleet
                            management.
                            Contact us for a pricing proposal and demo — our experts will get back to you within 24
                            hours.</p>
                    </div>
                    <h4 class="font-bold text-[#05055D] text-lg">Why choose Wialon:</h4>
                    <div class="flex space-x-2 items-center ">
                        <div class="w-5 h-5 rounded-full bg-[#0071E3] flex items-center justify-center">
                            <img src="icons/check.png" class="w-3 h-3" alt="check">
                        </div>
                        <p class="text-base text-[#404853]">Trusted by 2,700+ partner companies</p>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <div class="w-5 h-5 rounded-full bg-[#0071E3] flex items-center justify-center">
                            <img src="icons/check.png" class="w-3 h-3" alt="check">
                        </div>
                        <p class="text-base text-[#404853]">Supports 3,700+ hardware models</p>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <div class="w-5 h-5 rounded-full bg-[#0071E3] flex items-center justify-center">
                            <img src="icons/check.png" class="w-3 h-3" alt="check">
                        </div>
                        <p class="text-base text-[#404853]">Tier-3 data centers, 99.5% SLA-guaranteed uptime</p>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <div class="w-5 h-5 rounded-full bg-[#0071E3] flex items-center justify-center">
                            <img src="icons/check.png" class="w-3 h-3" alt="check">
                        </div>
                        <p class="text-base text-[#404853]">Technical, business, and educational support for partners
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-4 md:col-span-5 px-10">

                <form onsubmit="sendEmail(event)" class=" bg-white shadow-lg rounded-3xl p-10 space-y-4">
                    <h3 class="text-2xl text-[#05055D] ">Fill out a request form to start working with Wialon, a fleet
                        management software</h3>


                    <div class="space-x-4 flex items-center">
                        <label for="business-use" role="button" class="relative">
                            <input checked onclick="toggleForm(true)" type="radio" value="business-use" name="purpose"
                                id="business-use"
                                class="border-none check  invisible top-0 left-0 m-0 p-0 appearance-none opacity-0 cursor-pointer h-0 w-0 absolute">
                            <span tabindex="0"
                                class="flex items-center gap-[8px] text-lg px-4 py-3.5 border rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16"
                                    viewBox="0 0 16 16">
                                    <path fill="#1C274C" fill-rule="evenodd"
                                        d="M8.035.833h-.07c-.599 0-1.098 0-1.495.054-.418.056-.796.18-1.1.483-.303.304-.427.682-.483 1.1-.054.397-.054.896-.054 1.495v.052c-1.347.044-2.156.202-2.719.764-.78.781-.78 2.038-.78 4.552s0 3.772.78 4.553c.781.78 2.039.78 4.553.78h2.666c2.514 0 3.772 0 4.553-.78.78-.781.78-2.038.78-4.553 0-2.514 0-3.77-.78-4.552-.563-.562-1.372-.72-2.72-.764v-.052c0-.599 0-1.098-.053-1.495-.056-.418-.18-.796-.483-1.1-.304-.303-.682-.427-1.1-.483C9.133.833 8.634.833 8.035.833Zm2.132 3.168V4c0-.643-.001-1.074-.045-1.396-.041-.308-.113-.44-.2-.527-.086-.086-.218-.158-.526-.2-.322-.043-.753-.044-1.396-.044-.643 0-1.074.001-1.396.045-.308.041-.44.113-.527.2-.086.086-.158.218-.2.526-.043.322-.044.753-.044 1.396v.001L6.667 4h2.666l.834.001ZM11.333 6A.667.667 0 1 1 10 6a.667.667 0 0 1 1.333 0Zm-6 .667a.667.667 0 1 0 0-1.334.667.667 0 0 0 0 1.334Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Business use
                            </span>
                        </label>
                        <label for="personal-use" role="button" class="relative">
                            <input type="radio" onclick="toggle(true)" name="purpose" value="personal-use"
                                id="personal-use"
                                class="border-none check  invisible top-0 left-0 m-0 p-0 appearance-none opacity-0 cursor-pointer h-0 w-0 absolute">
                            <span tabindex="0"
                                class="flex items-center gap-[8px] text-lg px-4 py-3.5 border rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16"
                                    viewBox="0 0 16 16">
                                    <circle cx="8" cy="4" r="2.667" fill="#1C274C"></circle>
                                    <path fill="#1C274C"
                                        d="M13.333 11.667c0 1.656 0 3-5.333 3s-5.333-1.344-5.333-3c0-1.657 2.387-3 5.333-3 2.945 0 5.333 1.343 5.333 3Z">
                                    </path>
                                </svg>
                                Personnal use
                            </span>
                        </label>
                    </div>
                    <div id="step-1" class="step">
                        <div id="enterprise-options" class="w-full bg-[#F7F7F8] p-4 space-y-4 rounded-2xl">
                            <p class="text-lg text-[#404853]">Why are you interested in Wialon?*</p>
                            <div class="flex  space-x-2">
                                <input type="radio" name="acquisition"
                                    class="outline-none border border-gray-500 w-4 h-4" id="acquisition-end-user"
                                    value="fleet">
                                <div class="flex flex-1">
                                    <p class="text-lg text-[#404853] ">We are a fleet owner and want to track our
                                        corporate vehicles</p>
                                </div>
                            </div>
                            <div class="flex  space-x-2">
                                <input type="radio" name="acquisition"
                                    class="outline-none border border-gray-500 w-4 h-4" id="acquisition-end-user"
                                    value="start">
                                <div class="flex flex-1">
                                    <p class="text-lg text-[#404853]">We are going to start a fleet
                                        management business and track our clients' vehicles</p>
                                </div>
                            </div>
                            <div class="flex  space-x-2">
                                <input type="radio" name="acquisition"
                                    class="outline-none border border-gray-500 w-4 h-4" id="acquisition-end-user"
                                    value="already">
                                <div class="flex flex-1">
                                    <p class="text-lg text-[#404853]">We’re already in the fleet
                                        management business but want to expand the product portfolio</p>
                                </div>
                            </div>
                            <p id="error-reason" class="text-red-500 hidden">Veuillez sélectionner une option.</p>
                            <div class="w-full flex justify-end pt-4">
                                <button onclick="nextStep(1)" id="btn"
                                    class="px-8 py-3 rounded-xl bg-blue-400 text-white text-lg">Next</button>
                            </div>
                        </div>



                    </div>
                    <div id="step-2-personnel" class="w-full rounded-2xl hidden space-y-4 step ">
                        <h4 class="text-xl text-gray-700">What do you want to track?*</h4>

                        <select name="option" required
                            class="w-full outline-none border p-3 text-lg text-gray-800 rounded-xl bg-white focus:ring-1 focus:ring-offset-blue-500">
                            <option value="" selected disabled class="hidden">Select one of options</option>
                            <option value="1">My mobile phone</option>
                            <option value="2">My family members</option>
                            <option value="3">My family members' vehicle</option>
                            <option value="4">My pet(s)</option>
                            <option value="5">Other</option>
                        </select>
                        <div class="w-full flex items-center space-x-6">
                            <div class="w-1/2 space-y-2">
                                <label for="name" class="text-lg font-semibold text-gray-800">First name*</label>
                                <input type="text" id="name"
                                    class="w-full p-3 border rounded-lg outline-none bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your first name">
                            </div>
                            <div class="w-1/2 space-y-2">
                                <label for="name" class="text-lg text-gray-800 font-semibold">Last name*</label>
                                <input type="text" id="name"
                                    class="w-full p-3 border rounded-lg outline-none bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="w-full flex items-center space-x-6">
                            <div class="w-1/2 space-y-2">
                                <label for="name" class="text-lg text-gray-800 font-semibold">Email*</label>
                                <input type="email" id="email"
                                    class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your email">
                            </div>
                            <div class="w-1/2 space-y-2">
                                <label for="phone" class="text-lg text-gray-800 font-semibold">Phone*</label>
                                <input type="text" id="phone"
                                    class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your phone">
                            </div>
                        </div>
                        <div class="w-full flex items-center space-x-6">
                            <div class="w-1/2 space-y-2">
                                <label for="country" class="text-lg text-gray-800 font-semibold">Country*</label>
                                <input type="text" id="country"
                                    class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your country">
                            </div>
                            <div class="w-1/2 space-y-2">
                                <label for="city" class="text-lg text-gray-800 font-semibold">City*</label>
                                <input type="text" name="city" id="city"
                                    class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500"
                                    required placeholder="Enter your city">
                            </div>
                        </div>

                        <div class="w-full space-y-5 py-4">
                            <div class="w-full flex space-x-4">
                                <input type="checkbox" name="confidential" required class="w-4 h-4" id="">
                                <div class="flex flex-1">
                                    <a href="#" class="text-lg text-gray-700">I agree to personal data processing in
                                        accordance with Gurtam <span class="text-blue-600">Privacy Policy*</span> </a>
                                </div>
                            </div>
                            <div class="w-full flex space-x-4 ">
                                <input type="checkbox" name="confidential" required class="w-4 h-4" id="">
                                <div class="flex flex-1">
                                    <a href="#" class="text-lg text-gray-700">I understand that Wialon does not work
                                        directly with fleet owners, and I consent to my request and the associated data
                                        being shared with a Wialon partner.</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end pt-4">
                            <button type="submit"
                                class="px-8 py-3 rounded-xl bg-blue-400 text-white text-lg">Submit</button>
                        </div>

                    </div>
                    <!-- <div id="step-2-entreprise" class="w-full bg-white rounded-2xl space-y-4 step hidden">
                            <h4 class="text-xl text-gray-700">What do you want to track?*</h4>
                           
                              <select name="option" id="" class="w-full outline-none border p-3 text-lg text-gray-800 rounded-xl bg-white focus:ring-1 focus:ring-offset-blue-500">
                                  <option value="" selected disabled class="hidden">Select one of options</option>
                                  <option value="1">My mobile phone</option>
                                  <option value="2">My family members</option>
                                  <option value="3">My family members' vehicle</option>
                                  <option value="4">My pet(s)</option>
                                  <option value="5">Other</option>
                              </select>
                              <div class="w-full flex items-center space-x-6">
                                   <div class="w-1/2 space-y-2">
                                         <label for="name" class="text-lg font-semibold text-gray-800">First name*</label>
                                         <input type="text" id="name" class="w-full p-3 border rounded-lg outline-none bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your first name">
                                   </div>
                                   <div class="w-1/2 space-y-2">
                                      <label for="name" class="text-lg text-gray-800 font-semibold">Last name*</label>
                                      <input type="text" id="name" class="w-full p-3 border rounded-lg outline-none bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your last name">
                                </div>
                              </div>
                              <div class="w-full flex items-center space-x-6">
                                  <div class="w-1/2 space-y-2">
                                        <label for="name" class="text-lg text-gray-800 font-semibold">Email*</label>
                                        <input type="email" id="email" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your email">
                                  </div>
                                  <div class="w-1/2 space-y-2">
                                     <label for="phone" class="text-lg text-gray-800 font-semibold">Phone*</label>
                                     <input type="text" id="phone" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your phone">
                               </div>
                              </div>
                              <div class="w-full flex items-center space-x-6">
                                  <div class="w-1/2 space-y-2">
                                        <label for="country" class="text-lg text-gray-800 font-semibold">Country*</label>
                                        <input type="email" id="email" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your email">
                                  </div>
                                  <div class="w-1/2 space-y-2">
                                     <label for="city" class="text-lg text-gray-800 font-semibold">City*</label>
                                     <input type="text" id="phone" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your phone">
                               </div>
                              </div>
                              
                                <div class="w-full space-y-2">
                                      <label for="country" class="text-lg text-gray-800 font-semibold">Compagny*</label>
                                      <input type="text" id="compagny" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your compagny name">
                                </div>
                                <div class="w-full space-y-2">
                                    <label for="country" class="text-lg text-gray-800 font-semibold">Website*</label>
                                    <input type="text" id="website" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Enter your compagny's website">
                              </div>
                              <div class="w-full space-y-2">
                                <label for="country" class="text-lg text-gray-800 font-semibold">Fleet size**</label>
                                <input type="number" id="website" class="outline-none w-full p-3 border rounded-lg bg-white focus:ring-1 focus:ring-offset-blue-500 placeholder:text-gray-500" required placeholder="Number of vehicles (numeric only)">
                             </div>
                              <div class="w-full space-y-5 py-4">
                                   <div class="w-full flex space-x-4">
                                       <input type="checkbox" name="confidential" class="w-4 h-4" id="">
                                       <div class="flex flex-1">
                                          <a href="#" class="text-lg text-gray-700">I agree to personal data processing in accordance with Gurtam <span class="text-blue-600">Privacy Policy*</span> </a>
                                       </div>
                                   </div>
                                   <div class="w-full flex space-x-4 ">
                                      <input type="checkbox" name="confidential" class="w-4 h-4" id="">
                                      <div class="flex flex-1">
                                         <a href="#" class="text-lg text-gray-700">I understand that Wialon does not work directly with fleet owners, and I consent to my request and the associated data being shared with a Wialon partner.</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="w-full flex justify-end pt-4">
                                  <button onclick="nextStep(2)" class="px-8 py-3 rounded-xl bg-blue-400 text-white text-lg">Next</button>
                             </div>
                        
                           </div> -->
                </form>
            </div>
        </div>
    </div>

     <!-- Section Contact Abo-Tracking -->
     <section class="w-full py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <!-- Titre principal -->
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Contactez Abo-Tracking et atteignez les objectifs les plus ambitieux en télématique
            </h2>

            <!-- Conteneur des cartes -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Carte Devenir Partenaire -->
                <div
                    class="bg-[#1B1E3D] rounded-2xl p-8 text-center flex flex-col items-center justify-between h-full">
                    <!-- Icône -->
                    <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <!-- Contenu -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-white">Devenir un partenaire</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Rejoignez notre association mondiale d'experts en télématique. Aidez vos clients à
                            transformer leurs entreprises avec des solutions IdO connectées et l'analytique
                            avancée.
                        </p>
                    </div>

                    <!-- Bouton -->
                    <a href="mailto:" class="mt-8 inline-block px-6 py-3 bg-white text-[#1B1E3D] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        ENVOYER UNE DEMANDE
                    </a>
                </div>

                <!-- Carte Rechercher dans votre région -->
                <div
                    class="bg-[#2563EB] rounded-2xl p-8 text-center flex flex-col items-center justify-between h-full">
                    <!-- Icône -->
                    <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <!-- Contenu -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-white">Demandez Abo-Tracking dans votre région</h3>
                        <p class="text-gray-100 leading-relaxed">
                            Obtenez une solution télématique de nos partenaires fiables et améliorez les
                            opérations de votre flotte, réduisez les coûts de maintenance et gérez votre
                            consommation de carburant.
                        </p>
                    </div>

                    <!-- Bouton -->
                    <a href="tel:+"
                        class="mt-8 inline-block px-6 py-3 bg-white text-[#2563EB] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        APPELEZ
                    </a>
                </div>
            </div>
        </div>
    </section>



    <script>
        function toggleForm(isEnterprise) {
            document.getElementById("enterprise-options").classList.toggle("hidden", !isEnterprise);
            document.getElementById("step-2-personnel").classList.toggle("hidden", isEnterprise);
        }
        function toggle(isPersonal) {
            document.getElementById("step-2-personnel").classList.toggle("hidden", !isPersonal);
            document.getElementById("enterprise-options").classList.toggle("hidden", isPersonal);
            document.getElementById("step-2-entreprise").classList.add("hidden");
        }


        function nextStep(step) {
            let valid = true;
            if (step === 1 && document.querySelector('input[name="purpose"]:checked').value === "business-use") {
                let selectedReason = document.querySelector('input[name="acquisition"]:checked');

                if (!selectedReason) {
                    document.getElementById("error-reason").classList.remove("hidden");
                    valid = false;
                } else {
                    document.getElementById("error-reason").classList.add("hidden");

                }
            }

            if (valid) {
                document.getElementById("step-1").classList.add("hidden");
                let userType = document.querySelector('input[name="purpose"]:checked').value;
                if (userType === "business-use") {
                    document.getElementById("step-2-personnel").classList.add("hidden");
                    document.getElementById("step-2-entreprise").classList.remove("hidden");
                } else {
                    document.getElementById("step-2-entreprise").classList.add("hidden");
                    document.getElementById("step-2-personnel").classList.remove("hidden");

                }
            }
        }


        function sendEmail(event) {
            event.preventDefault();
            const form = event.target;

            emailjs.sendForm("service_1nm53sq", "template_ihzrrtf", form)
                .then(function () {
                    alert('Email envoyé avec succès !');
                    form.reset();
                }, function (error) {
                    alert('Échec de l\'envoi de l\'email : ' + JSON.stringify(error));
                });
        }

    </script>
</body>

</html>