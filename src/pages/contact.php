<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Abo-Tracking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="../output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full flex flex-col">
    <!------start navbar-->
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
        

        <div class="w-full py-8 bg-[#1B1E3D] flex items-center justify-center">

            <nav class="w-full px-4 lg:px-8 flex justify-between items-center">
                <!---contain logo-->
                <div class="flex items-center space-x-2">
                    <img src="../images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                    <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                </div>
                <div class=" hidden xl:flex lg:space-x-8">
                    <!-- Home Link -->
                    <a href="../index.html" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        <span>Home</span>
                    </a>
                    
                    <!-- Solutions Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                            <span>Solutions</span>
                        </button>

                        <!-- Solutions Dropdown Menu -->
                        <div class="absolute top-full left-0 w-[560px] bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 -translate-y-2 group-hover:translate-y-1">
                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Colonne 1 -->
                                    <div>
                                        <ul class="space-y-1">
                                            <!-- Leasing de véhicules -->
                                            <li>
                                                <a href="solutions/leasing.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                                        <i class="lni lni-car-alt text-lg text-blue-600 group-hover/item:text-blue-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Leasing de véhicules</span>
                                                        <span class="text-sm text-gray-500">Suivi des véhicules en location</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Agriculture intelligente -->
                                            <li>
                                                <a href="solutions/hecterra.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
                                                        <i class="lni lni-leaf text-lg text-green-600 group-hover/item:text-green-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Agriculture intelligente</span>
                                                        <span class="text-sm text-gray-500">Contrôle des cultures avec Hecterra</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Gestion des flottes -->
                                            <li>
                                                <a href="solutions/logistics.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                                        <i class="lni lni-delivery text-lg text-purple-600 group-hover/item:text-purple-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Gestion des flottes</span>
                                                        <span class="text-sm text-gray-500">Gestion des processus de livraison</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Eco Driving -->
                                            <li>
                                                <a href="solutions/ecodriving.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">
                                                        <i class="lni lni-user text-lg text-yellow-600 group-hover/item:text-yellow-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Eco Driving</span>
                                                        <span class="text-sm text-gray-500">Contrôle de la qualité de conduite</span>
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
                                                <a href="solutions/fleetrun.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                                                        <i class="lni lni-cog text-lg text-red-600 group-hover/item:text-red-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Fleetrun</span>
                                                        <span class="text-sm text-gray-500">Gestion de la maintenance</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Équipes terrain -->
                                            <li>
                                                <a href="solutions/wiatag.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center">
                                                        <i class="lni lni-users text-lg text-indigo-600 group-hover/item:text-indigo-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">WiaTag</span>
                                                        <span class="text-sm text-gray-500">Suivi des équipes terrain</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Transports publics -->
                                            <li>
                                                <a href="solutions/nimbus.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center">
                                                        <i class="lni lni-bus text-lg text-teal-600 group-hover/item:text-teal-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">NimBus</span>
                                                        <span class="text-sm text-gray-500">Surveillance des transports publics</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Gestion carburant -->
                                            <li>
                                                <a href="solutions/fuel.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                                    <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center">
                                                        <i class="lni lni-drop text-lg text-orange-600 group-hover/item:text-orange-700"></i>
                                                    </div>
                                                    <div>
                                                        <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Gestion carburant</span>
                                                        <span class="text-sm text-gray-500">Contrôle de consommation</span>
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
                        <button class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                            <span>Abonnement</span>
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 w-[280px] bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 -translate-y-2 group-hover:translate-y-1">
                            <div class="p-3">
                                <ul class="space-y-1">
                                    <!-- Basic Plan -->
                                    <li>
                                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                                                <i class="lni lni-rocket text-lg text-blue-600 group-hover/item:text-blue-700"></i>
                                            </div>
                                            <div>
                                                <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Personnel</span>
                                                <span class="text-sm text-gray-500">Démarrez avec l'essentiel</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Pro Plan -->
                                    <li>
                                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                                                <i class="lni lni-diamond text-lg text-purple-600 group-hover/item:text-purple-700"></i>
                                            </div>
                                            <div>
                                                <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Entreprise</span>
                                                <span class="text-sm text-gray-500">Solutions personnalisées</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Enterprise Plan -->
                                    <li>
                                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
                                            <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center">
                                                <i class="lni lni-crown text-lg text-orange-600 group-hover/item:text-orange-700"></i>
                                            </div>
                                            <div>
                                                <span class="block text-gray-800 font-medium group-hover/item:text-blue-600">Dealer</span>
                                                <span class="text-sm text-gray-500">Solution pour les revendeurs</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                     <!-- Bouquets Link -->
                     <a href="bouquets.html" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        
                        <span>Bouquets</span>
                    </a>

                    <!-- Support Link -->
                    <a href="support.html" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        
                        <span>Support</span>
                    </a>

                    <!-- Contact Link -->
                    <a href="contact.html" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                       
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
                        class="px-6 outline-none border-2 text-white text-base duration-200 font-semibold border-white  hover:bg-white hover:text-[#1B1E3D] rounded py-3">
                        <a href="#">Commencer</a>
                    </button>
                </div>

            </nav>
        </div>
    </header>

    <!-- Spacer for fixed header -->
    <div class="w-full" style="height: calc(3.5rem + 5rem)"></div>

    <!-- Main content - Fills available space -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative py-16 bg-cover bg-center bg-no-repeat min-h-[100px]" 
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/app-ss/banner_x3.jpg');">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-bold text-white mb-6">Contactez-Nous</h1>
                    <p class="text-gray-300 mb-8">
                        Trouvez rapidement des réponses à vos questions et accédez à notre documentation complète.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Support Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-4">Besoin d'aide supplémentaire ?</h2>
                    <p class="text-gray-600 mb-8">
                        Notre équipe de support est disponible 24/7 pour répondre à vos questions.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="mailto:@gmail.com" class="inline-flex items-center justify-center px-6 py-3 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors">
                            <i class="lni lni-ticket-alt mr-2"></i>
                            Envoyer un email
                        </a>
                        <a href="https://wa.me/237698761410" class="inline-flex items-center justify-center px-6 py-3 border border-[#1B1E3D] text-[#1B1E3D] rounded-lg hover:bg-[#1B1E3D] hover:text-white transition-colors">
                            <i class="lni lni-whatsapp mr-2"></i>
                            Chat en direct
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <div class="w-full" style="height: calc(2.5rem)"></div>
        
        <section class="relative" id="contact">
            <!-- Background Image Section -->
            <div class="h-[400px] w-full bg-cover bg-center" 
                style="background-image: url('../images/app-ss/app-1.jpg');">
            </div>
            
            <!-- White Background Bottom Section -->
            <div class="h-[300px] w-full bg-white"></div>

            <!-- Floating Contact Card -->
            <div class="absolute inset-x-0 top-[100px]">
                <div class="container mx-auto px-4">
                    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <!-- Left Side - Contact Form -->
                            <div class="p-8 space-y-6">
                                <form id="contactForm" class="space-y-6" method="POST">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700" data-i18n="fullName">Nom complet</label>
                                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                        </div>
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700" data-i18n="email">Email</label>
                                            <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="subject" class="block text-sm font-medium text-gray-700" data-i18n="subject">Sujet</label>
                                        <input type="text" id="subject" name="subject" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                    </div>
                                    <div>
                                        <label for="message" class="block text-sm font-medium text-gray-700" data-i18n="message">Message</label>
                                        <textarea id="message" name="message" rows="6" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]"></textarea>
                                    </div>
                                    <button type="submit" id="submitBtn" class="w-full px-6 py-4 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors" data-i18n="sendMessage">
                                        Envoyer le message
                                    </button>
                                    <div id="formMessage" class="hidden mt-4 p-4 rounded-lg"></div>
                                </form>
                            </div>

                            <!-- Right Side - Contact Info -->
                            <div class="bg-gray-50 p-8">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Technical Support -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-headphone text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Technical support</h3>
                                            <p class="text-gray-600 text-sm">support@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Sales Questions -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-dollar text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Sales questions</h3>
                                            <p class="text-gray-600 text-sm">cindybethel@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Press -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-facebook text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Press</h3>
                                            <p class="text-gray-600 text-sm">info@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Bug Report -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-bug text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Bug report</h3>
                                            <p class="text-gray-600 text-sm">serviceclient@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="w-full" style="height: calc(2.5rem)"></div>
        <!-- Map Section -->
        <section class="relative z-10 mt-[-100px] pb-0">
            <!-- Full Width Map Container -->
            <div class="w-full h-[400px]">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.3721619999999997!3d48.8583736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sfr!2sfr!4v1647436435286!5m2!1sfr!2sfr"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

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
                            class="w-full sm:w-80 px-4 py-3 rounded-lg bg-gray-700/50 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#1B1E3D]">
                        <button
                            class="w-full sm:w-auto px-6 py-3 bg-[#1B1E3D] hover:bg-[#3B1B66] text-white font-semibold rounded-lg transition duration-300">
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
                        <img src="../images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                        <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Votre bouclier GPS-4G à votre portée. Solutions de tracking professionnel pour votre sécurité.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#1B1E3D] hover:text-white transition-all">
                            <i class="lni lni-facebook"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#1B1E3D] hover:text-white transition-all">
                            <i class="lni lni-twitter-old"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#1B1E3D] hover:text-white transition-all">
                            <i class="lni lni-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#1B1E3D] hover:text-white transition-all">
                            <i class="lni lni-linkedin"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#1B1E3D] hover:text-white transition-all">
                            <i class="lni lni-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="../index.html" class="text-gray-400 hover:text-white transition-colors">Accueil</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Solutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Ressources</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Community</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Nos Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Suivi GPS</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Gestion de Flotte</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sécurité Véhicules</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Analyse de Données</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Support Technique</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3 text-gray-400">
                            <span>Phone : </span>
                            <span>+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <span>Email : </span>
                            <span>contact@abo-tracking.com</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <span>Address : </span>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const formMessage = document.getElementById('formMessage');

        // Fonction pour afficher les messages
        function showMessage(success, message) {
            formMessage.classList.remove('hidden');
            formMessage.className = `mt-4 p-4 rounded-lg ${success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}`;
            formMessage.textContent = message;
        }

        // Fonction pour valider l'email
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Validation côté client
            const name = form.querySelector('#name').value.trim();
            const email = form.querySelector('#email').value.trim();
            const subject = form.querySelector('#subject').value.trim();
            const message = form.querySelector('#message').value.trim();

            // Vérification des champs requis
            if (!name || !email || !subject || !message) {
                showMessage(false, translations[currentLanguage].requiredField);
                return;
            }

            // Validation de l'email
            if (!isValidEmail(email)) {
                showMessage(false, translations[currentLanguage].invalidEmail);
                return;
            }

            // Désactiver le bouton pendant l'envoi
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="lni lni-spinner lni-spin-effect"></i> ' + translations[currentLanguage].sending;

            try {
                const formData = new FormData(form);
                const response = await fetch('../php/send_email.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    showMessage(true, data.message);
                    form.reset();
                } else {
                    showMessage(false, data.message);
                }
            } catch (error) {
                showMessage(false, translations[currentLanguage].errorMessage);
                console.error('Erreur:', error);
            } finally {
                // Réactiver le bouton
                submitBtn.disabled = false;
                submitBtn.innerHTML = translations[currentLanguage].sendMessage;
            }
        });
    });
    </script>
</body>

</html>