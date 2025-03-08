<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leasing de Véhicules - Abo-Tracking</title>
    <link rel="stylesheet" href="../../output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full flex flex-col bg-[#f8f9fa]">
   <?php include '../../partials/header3.php';?>

    <!-- Spacer for fixed header -->
    <div class="w-full" style="height: calc(3.5rem + 5rem)"></div>

    <main class="flex-grow">
            <!-- Hero Section -->
            <section class="bg-[#2A0A55] text-white py-20">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto text-center">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">Solution de suivi GPS pour les entreprises de leasing de véhicules</h1>
                        <p class="text-xl text-gray-200 mb-8">
                            Un logiciel fiable pour le suivi et la récupération de l'emplacement des véhicules de leasing
                        </p>
                        <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                            Obtenir une version démo
                        </a>
                    </div>
                </div>
            </section>

        <!-- Pour qui est ce produit Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900">Pour qui est ce produit ?</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Proposez LeaseControl pour aider les entreprises à sécuriser de manière proactive leurs contrats de leasing grâce au suivi GPS des prêts automobiles.
                    </p>
                </div>

                <div class="relative">
                    <!-- Cercle central décoratif -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-[600px] h-[600px] border-2 border-gray-100 rounded-full"></div>
                        <div class="absolute w-[400px] h-[400px] border-2 border-gray-200 rounded-full"></div>
                    </div>

                    <!-- Grid des clients -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
                        <!-- Contrats automobiles -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-car-alt text-3xl text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Contrats automobiles à haut risque</h3>
                            </div>
                            <p class="text-gray-600">Protection et suivi des véhicules pour les contrats présentant des risques élevés.</p>
                        </div>

                        <!-- Entreprises de financement -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-purple-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-investment text-3xl text-purple-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Entreprises de financement automobile</h3>
                            </div>
                            <p class="text-gray-600">Solutions de gestion et de sécurisation des investissements automobiles.</p>
                        </div>

                        <!-- Leasing de véhicules -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-delivery text-3xl text-green-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Leasing de véhicules</h3>
                            </div>
                            <p class="text-gray-600">Gestion complète des flottes en location longue durée.</p>
                        </div>

                        <!-- Concessionnaires -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-orange-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-store text-3xl text-orange-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Concessionnaires automobiles</h3>
                            </div>
                            <p class="text-gray-600">Suivi et gestion des véhicules en stock et en démonstration.</p>
                        </div>

                        <!-- Prêts automobiles -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-credit-cards text-3xl text-red-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Prêts automobiles</h3>
                            </div>
                            <p class="text-gray-600">Sécurisation et suivi des véhicules financés par prêt.</p>
                        </div>

                        <!-- Concessions BHPH -->
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                            <div class="mb-6">
                                <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                                    <i class="lni lni-handshake text-3xl text-indigo-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Concessions BHPH</h3>
                                <p class="text-sm text-gray-500">(Buy Here Pay Here)</p>
                            </div>
                            <p class="text-gray-600">Solutions adaptées pour les concessions avec financement interne.</p>
                        </div>
                    </div>
                </div>

                <!-- Ligne de connexion animée -->
                <div class="absolute inset-0 pointer-events-none">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                        <path class="text-gray-200" d="M100,100 Q200,200 300,150 T500,300" stroke="currentColor" fill="none" stroke-width="2">
                            <animate attributeName="d" dur="3s" repeatCount="indefinite"
                                values="M100,100 Q200,200 300,150 T500,300;
                                        M100,150 Q200,250 300,200 T500,350;
                                        M100,100 Q200,200 300,150 T500,300" />
                        </path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- Bento Grid Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h3 class="text-blue-600 font-medium mb-2">Solution complète</h3>
                    <h2 class="text-4xl font-bold text-gray-900">Protection et gestion avancée</h2>
                    <h2 class="text-4xl font-bold text-gray-900">de votre flotte automobile</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Protection Anti-vol -->
                    <div class="col-span-1 md:col-span-2 bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Protection Anti-vol Avancée</h3>
                        <p class="text-gray-600 mb-6">Système de sécurité télématique pour prévenir et contrer les vols de véhicules.</p>
                        <div class="bg-blue-50 rounded-2xl p-6">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="flex flex-col items-center p-4 bg-white rounded-xl">
                                    <i class="lni lni-shield text-3xl text-blue-600 mb-2"></i>
                                    <span class="text-sm text-gray-600">Protection 24/7</span>
                                </div>
                                <div class="flex flex-col items-center p-4 bg-white rounded-xl">
                                    <i class="lni lni-alarm text-3xl text-blue-600 mb-2"></i>
                                    <span class="text-sm text-gray-600">Alertes en temps réel</span>
                                </div>
                                <div class="flex flex-col items-center p-4 bg-white rounded-xl">
                                    <i class="lni lni-map-marker text-3xl text-blue-600 mb-2"></i>
                                    <span class="text-sm text-gray-600">Géolocalisation</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Suivi des Paiements -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Gestion des Paiements</h3>
                        <p class="text-gray-600 mb-6">Suivi et gestion des retards de paiement et des échéances.</p>
                        <div class="bg-green-50 rounded-2xl p-6">
                            <div class="flex flex-col items-center">
                                <i class="lni lni-credit-cards text-4xl text-green-600 mb-4"></i>
                                <div class="w-full bg-white rounded-xl p-4 text-center">
                                    <span class="block text-sm font-semibold text-gray-800">Taux de recouvrement</span>
                                    <span class="text-2xl font-bold text-green-600">98%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IoT et Télématique -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Technologies IoT</h3>
                        <p class="text-gray-600 mb-6">Solutions télématiques avancées pour le suivi en temps réel.</p>
                        <div class="bg-purple-50 rounded-2xl p-6">
                            <div class="flex flex-col items-center">
                                <i class="lni lni-network text-4xl text-purple-600 mb-4"></i>
                                <div class="grid grid-cols-2 gap-2 w-full">
                                    <div class="bg-white p-3 rounded-xl text-center">
                                        <span class="text-sm text-gray-600">GPS</span>
                                    </div>
                                    <div class="bg-white p-3 rounded-xl text-center">
                                        <span class="text-sm text-gray-600">4G</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Récupération de Véhicules -->
                    <div class="col-span-1 md:col-span-2 bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Procédures de Récupération Optimisées</h3>
                        <p class="text-gray-600 mb-6">Simplification et réduction des coûts des procédures de récupération.</p>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-2">
                                    <i class="lni lni-car text-red-600 text-2xl"></i>
                                </div>
                                <span class="text-sm text-gray-600">Localisation</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-2">
                                    <i class="lni lni-timer text-yellow-600 text-2xl"></i>
                                </div>
                                <span class="text-sm text-gray-600">Intervention rapide</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                    <i class="lni lni-calculator text-green-600 text-2xl"></i>
                                </div>
                                <span class="text-sm text-gray-600">Réduction des coûts</span>
                            </div>
                        </div>
                    </div>

                    <!-- Valeur Commerciale -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Valeur Commerciale</h3>
                        <p class="text-gray-600 mb-6">Maximisez les bénéfices des concessionnaires.</p>
                        <div class="bg-orange-50 rounded-2xl p-6">
                            <div class="flex flex-col items-center">
                                <i class="lni lni-graph text-4xl text-orange-600 mb-4"></i>
                                <div class="w-full bg-white rounded-xl p-4 text-center">
                                    <span class="text-sm text-gray-600">ROI amélioré</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fiabilité -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-bold mb-4">Fiabilité Garantie</h3>
                        <p class="text-gray-600 mb-6">Système de suivi GPS haute performance et fiable.</p>
                        <div class="bg-indigo-50 rounded-2xl p-6">
                            <div class="flex flex-col items-center">
                                <i class="lni lni-checkmark-circle text-4xl text-indigo-600 mb-4"></i>
                                <div class="w-full bg-white rounded-xl p-4 text-center">
                                    <span class="text-sm text-gray-600">99.9% de disponibilité</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900">Fonctionnalités avancées</h2>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">de suivi et contrôle</h2>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Liste des fonctionnalités -->
                    <div class="lg:w-1/2 space-y-4">
                        <!-- Suivi temps réel -->
                        <div class="feature-item group cursor-pointer" data-target="realtime-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-blue-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-map-marker text-2xl text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600">Suivi en temps réel</h3>
                                        <p class="text-gray-600 mt-2">Localisez et suivez tous vos véhicules en temps réel sur une carte interactive</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Zones personnalisées -->
                        <div class="feature-item group cursor-pointer" data-target="zones-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-green-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-target text-2xl text-green-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600">Zones personnalisées</h3>
                                        <p class="text-gray-600 mt-2">Définissez des zones autorisées et recevez des alertes en cas de sortie de zone</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contrôle connexion -->
                        <div class="feature-item group cursor-pointer" data-target="connection-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-purple-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-network text-2xl text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-purple-600">Contrôle de connexion</h3>
                                        <p class="text-gray-600 mt-2">Détection automatique des pertes de signal et alertes immédiates</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notifications -->
                        <div class="feature-item group cursor-pointer" data-target="notifications-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-orange-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-alarm text-2xl text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-orange-600">Notifications</h3>
                                        <p class="text-gray-600 mt-2">Système d'alertes personnalisables pour tous les événements importants</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrêt moteur -->
                        <div class="feature-item group cursor-pointer" data-target="engine-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-red-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-power-switch text-2xl text-red-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-red-600">Arrêt du moteur à distance</h3>
                                        <p class="text-gray-600 mt-2">Contrôlez à distance l'arrêt du moteur en cas d'urgence</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rapports et Tracés -->
                        <div class="feature-item group cursor-pointer" data-target="reports-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-indigo-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-graph text-2xl text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600">Rapports et Tracés</h3>
                                        <p class="text-gray-600 mt-2">Trip History</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Zone d'affichage des images -->
                    <div class="lg:w-1/2 bg-white rounded-2xl p-6 shadow-lg">
                        <div class="relative h-[500px] overflow-hidden rounded-xl">
                            <!-- Images des fonctionnalités -->
                            <img src="../../images/solution/realtime.png" alt="Suivi temps réel" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="realtime-image">
                            <img src="../../images/solution/zones.png" alt="Zones personnalisées" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="zones-image">
                            <img src="../../images/solution/connection.png" alt="Contrôle connexion" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="connection-image">
                            <img src="../../images/solution/notifications.png" alt="Notifications" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="notifications-image">
                            <img src="../../images/solution/engine.png" alt="Arrêt moteur" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="engine-image">
                            <img src="../../images/solution/reports.png" alt="Rapports" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="reports-image">
                            
                            <!-- État par défaut -->
                            <div class="absolute inset-0 flex items-center justify-center bg-gray-100" id="default-state">
                                <p class="text-gray-500 text-lg">Sélectionnez une fonctionnalité pour voir les détails</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">FAQ sur LeaseControl</h2>
                        <p class="text-gray-600">
                            Nous avons recueilli et répondu à vos dernières questions sur le produit afin que vous puissiez mieux comprendre comment proposer la solution à vos clients de manière plus efficace.
                        </p>
                    </div>

                    <!-- Questions/Réponses -->
                    <div class="space-y-4">
                        <!-- Question 1 -->
                        <div class="faq-item border border-gray-200 rounded-xl bg-white overflow-hidden">
                            <button class="faq-button w-full flex items-center justify-between p-6 text-left">
                                <div class="flex items-center space-x-4">
                                    <i class="lni lni-question-circle text-blue-600 text-2xl"></i>
                                    <span class="text-lg font-semibold text-gray-900">Est-ce que LeaseControl est un module inclus en Wialon, ou est-ce une plateforme différente ?</span>
                                </div>
                                <i class="lni lni-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 pt-0">
                                <p class="text-gray-600 ml-10">LeaseControl est une plateforme indépendante spécialement conçue pour la gestion des contrats de leasing automobile, tout en s'intégrant parfaitement avec Wialon pour certaines fonctionnalités.</p>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="faq-item border border-gray-200 rounded-xl bg-white overflow-hidden">
                            <button class="faq-button w-full flex items-center justify-between p-6 text-left">
                                <div class="flex items-center space-x-4">
                                    <i class="lni lni-question-circle text-blue-600 text-2xl"></i>
                                    <span class="text-lg font-semibold text-gray-900">Y a-t-il un matériel spécifique disponible pour LeaseControl ?</span>
                                </div>
                                <i class="lni lni-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 pt-0">
                                <p class="text-gray-600 ml-10">Oui, nous proposons des traceurs GPS spécialement configurés pour LeaseControl, optimisés pour la sécurité et la fiabilité dans le contexte du leasing.</p>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="faq-item border border-gray-200 rounded-xl bg-white overflow-hidden">
                            <button class="faq-button w-full flex items-center justify-between p-6 text-left">
                                <div class="flex items-center space-x-4">
                                    <i class="lni lni-question-circle text-blue-600 text-2xl"></i>
                                    <span class="text-lg font-semibold text-gray-900">Puis-je utiliser Google Maps ou d'autres services cartographiques dans LeaseControl ?</span>
                                </div>
                                <i class="lni lni-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 pt-0">
                                <p class="text-gray-600 ml-10">Oui, LeaseControl est compatible avec plusieurs services cartographiques, dont Google Maps, pour une expérience de suivi optimale.</p>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="faq-item border border-gray-200 rounded-xl bg-white overflow-hidden">
                            <button class="faq-button w-full flex items-center justify-between p-6 text-left">
                                <div class="flex items-center space-x-4">
                                    <i class="lni lni-question-circle text-blue-600 text-2xl"></i>
                                    <span class="text-lg font-semibold text-gray-900">LeaseControl a-t-il une application mobile ?</span>
                                </div>
                                <i class="lni lni-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 pt-0">
                                <p class="text-gray-600 ml-10">Oui, une application mobile complète est disponible pour iOS et Android, permettant un accès à toutes les fonctionnalités essentielles en déplacement.</p>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="faq-item border border-gray-200 rounded-xl bg-white overflow-hidden">
                            <button class="faq-button w-full flex items-center justify-between p-6 text-left">
                                <div class="flex items-center space-x-4">
                                    <i class="lni lni-question-circle text-blue-600 text-2xl"></i>
                                    <span class="text-lg font-semibold text-gray-900">Pendant combien de temps les données sont-elles stockées ?</span>
                                </div>
                                <i class="lni lni-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 pt-0">
                                <p class="text-gray-600 ml-10">Les données sont conservées pendant toute la durée du contrat de leasing plus une période additionnelle de 12 mois, avec possibilité d'extension selon les besoins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        
        <?php include '../../partials/calling.php';?>
        <?php include '../../partials/demande.php';?>
    </main>

    <?php include '../../partials/footer.php';?>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionner tous les éléments nécessaires
            const featureItems = document.querySelectorAll('.feature-item');
            const featureImages = document.querySelectorAll('.feature-image');
            const defaultState = document.getElementById('default-state');

            // Fonction pour masquer toutes les images
            function hideAllImages() {
                featureImages.forEach(image => {
                    image.style.opacity = '0';
                    image.style.zIndex = '0';
                });
                if (defaultState) {
                    defaultState.style.opacity = '1';
                    defaultState.style.zIndex = '1';
                }
            }

            // Ajouter les écouteurs d'événements pour chaque élément
            featureItems.forEach(item => {
                item.addEventListener('click', function() {
                    const targetId = this.dataset.target;
                    hideAllImages();
                    const targetImage = document.getElementById(targetId);
                    if (targetImage) {
                        if (defaultState) defaultState.style.opacity = '0';
                        targetImage.style.opacity = '1';
                        targetImage.style.zIndex = '2';
                    }
                });

                // Ajouter l'effet de survol
                item.addEventListener('mouseenter', function() {
                    this.querySelector('h3').classList.add('text-blue-600');
                });

                item.addEventListener('mouseleave', function() {
                    this.querySelector('h3').classList.remove('text-blue-600');
                });
            });

            // Afficher l'état par défaut au chargement
            hideAllImages();
        });
    </script>
</body>

</html>