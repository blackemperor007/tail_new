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
                    <a href="../index.php" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
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
                                                <a href="solutions/leasing.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/hecterra.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/logistics.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/ecodriving.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/fleetrun.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/wiatag.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/nimbus.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                                                <a href="solutions/fuel.php" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 group/item transition-all">
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
                     <a href="bouquets.php" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        
                        <span>Bouquets</span>
                    </a>

                    <a href="about.php" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        
                        <span>About</span>
                    </a>


                    <!-- Support Link -->
                    <a href="support.php" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                        
                        <span>Support</span>
                    </a>

                    <!-- Contact Link -->
                    <a href="contact.php" class="flex items-center space-x-2 text-[17px] font-semibold text-white hover:text-blue-200 transition-colors">
                       
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