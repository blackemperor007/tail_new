<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bouquets - Abo-Tracking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../output.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        @media (max-width: 640px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
        .new-feature {
            background-color: rgba(34, 197, 94, 0.1);
            border-radius: 0.5rem;
            padding: 0.5rem;
        }
        .new-feature span {
            color: rgb(22, 163, 74) !important;
            font-weight: 500;
        }
        .new-feature i {
            color: rgb(22, 163, 74) !important;
        }
    </style>
</head>
<body class="min-h-full flex flex-col">
    
<?php include'../partials/header2.php'; ?>
    <!-- Spacer for fixed header -->
    <div class="w-full" style="height: calc(3.5rem + 5rem)"></div>

    <!-- Main content -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative py-16 bg-cover bg-center bg-no-repeat" 
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bouquets/bouquet1.jpg');">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-bold text-white mb-6">Nos Bouquets</h1>
                    <p class="text-gray-300 mb-8">
                        Découvrez nos différentes offres adaptées à vos besoins
                    </p>
                </div>
            </div>
        </section>

        <!-- Detailed Bouquets Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Détails de nos Bouquets</h2>
                
                <!-- PREMIUMTRACK -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="relative overflow-hidden">
                        <img src="../images/bouquets/bouquet1.jpg" alt="Premium Track" 
                            class="rounded-2xl shadow-xl w-full transform transition-transform duration-700 hover:scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-500 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-yellow-500 rounded-full opacity-20 animate-pulse delay-300"></div>
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-[#1B1E3D]">BOUQUET PREMIUMTRACK</h2>
                            <div class="w-20 h-1 bg-[#1B1E3D]"></div>
                        </div>
                        <ul class="features-grid">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Température moteur en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Gestion carburant (CAN control)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Localisation avec haute précision</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Coupure moteur</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Géocloture</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Vitesse en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Excès de vitesse</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Tour moteur (RPM)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur d'allumage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détection de remorquage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur de choc</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Distance parcourue</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Rapport Imprimable des activités par déplacement/jour/semaine/mois…</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Historique des déplacements (70jrs)</span>
                            </li>
                        </ul>
                        <div class="pt-6">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors">
                                <span>Souscrire maintenant</span>
                                <i class="lni lni-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- LITETRACK -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="relative overflow-hidden order-1 lg:order-2">
                        <img src="../images/bouquets/bouquet2.jpg" alt="Lite Track" 
                            class="rounded-2xl shadow-xl w-full transform transition-transform duration-700 hover:scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-purple-500 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-500 rounded-full opacity-20 animate-pulse delay-300"></div>
                    </div>
                    <div class="space-y-6 order-2 lg:order-1">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-[#1B1E3D]">BOUQUET LITETRACK</h2>
                            <div class="w-20 h-1 bg-[#1B1E3D]"></div>
                        </div>
                        <ul class="features-grid">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Température moteur</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Gestion carburant; entrée/sortie (CAN control)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Localisation avec haute précision</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Coupure moteur</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur d'allumage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Geofencing</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Vitesse en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Excès de vitesse</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Freinage brusque</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Distance parcourue</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Rapport Imprimable des activités par déplacement/jour/semaine/mois…</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Historique des déplacements (40jrs)</span>
                            </li>
                        </ul>
                        <div class="pt-6">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors">
                                <span>Souscrire maintenant</span>
                                <i class="lni lni-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ELEMTRACK -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="relative overflow-hidden">
                        <img src="../images/bouquets/bouquet3.jpg" alt="Elem Track" 
                            class="rounded-2xl shadow-xl w-full transform transition-transform duration-700 hover:scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-orange-500 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-orange-500 rounded-full opacity-20 animate-pulse delay-300"></div>
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-[#1B1E3D]">BOUQUET ELEMTRACK</h2>
                            <div class="w-20 h-1 bg-[#1B1E3D]"></div>
                        </div>
                        <ul class="features-grid">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Localisation avec haute précision</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Coupure moteur</span>
                            </li>
                            <li class="flex items-start space-x-3 new-feature">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Géocloture</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Vitesse en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Excès de vitesse</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur d'allumage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détection de remorquage</span>
                            </li>
                            <li class="flex items-start space-x-3 new-feature">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur de choc</span>
                            </li>
                            <li class="flex items-start space-x-3 new-feature">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Distance parcourue</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Rapport Imprimable des activités par déplacement/jour/semaine/mois…</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Historique des déplacements (30jrs)</span>
                            </li>
                        </ul>
                        <div class="pt-6">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors">
                                <span>Souscrire maintenant</span>
                                <i class="lni lni-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PERSOTRACK -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="relative overflow-hidden order-1 lg:order-2">
                        <img src="../images/bouquets/bouquet4.jpg" alt="Perso Track" 
                            class="rounded-2xl shadow-xl w-full transform transition-transform duration-700 hover:scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-green-500 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-green-500 rounded-full opacity-20 animate-pulse delay-300"></div>
                    </div>
                    <div class="space-y-6 order-2 lg:order-1">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-[#1B1E3D]">BOUQUET PERSOTRACK</h2>
                            <div class="w-20 h-1 bg-[#1B1E3D]"></div>
                            <p class="text-gray-600 italic">
                                Idéal pour : Enfants, Livreurs, Agents de sécurité, Agents commerciaux, 
                                Employés en mission délicate, Commissionnaires
                            </p>
                        </div>
                        <ul class="features-grid">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Localisation avec haute précision</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Géocloture</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Vitesse en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur de choc</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Distance parcourue</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Rapport Imprimable des activités par déplacement/jour/semaine/mois…</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Historique des déplacements (20jrs)</span>
                            </li>
                        </ul>
                        <div class="pt-6">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors">
                                <span>Souscrire maintenant</span>
                                <i class="lni lni-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BENSIKIN -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="relative overflow-hidden">
                        <img src="../images/bouquets/bouquet5.jpg" alt="Bensikin Track" 
                            class="rounded-2xl shadow-xl w-full transform transition-transform duration-700 hover:scale-105">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-red-500 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-red-500 rounded-full opacity-20 animate-pulse delay-300"></div>
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold text-[#1B1E3D]">BOUQUET BENSIKIN</h2>
                            <div class="w-20 h-1 bg-[#1B1E3D]"></div>
                            <p class="text-gray-600 italic">
                                Solution adaptée pour les motos-taxis
                            </p>
                        </div>
                        <ul class="features-grid">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Localisation avec haute précision</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Vitesse en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur d'allumage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Détecteur de remorquage</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Rapport Imprimable des activités par déplacement/jour/semaine/mois…</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-xl mt-1"></i>
                                <span class="text-gray-700">Historique des déplacements (20jrs)</span>
                            </li>
                        </ul>
                        <div class="pt-6">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors">
                                <span>Souscrire maintenant</span>
                                <i class="lni lni-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Bouquets Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Bouquets Spéciaux</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- CORRIDOR CEMAC -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow p-8">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="lni lni-world text-xl text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">CORRIDOR CEMAC</h3>
                                <p class="text-gray-500">Couverture internationale</p>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Température moteur en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Gestion carburant entrée/sortie (CAN control)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Localisation en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Position de la pédale</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Historique (60/90 jours)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Couverture réseau CEMAC +25 réseaux satellitaires</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full py-3 px-6 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors text-center">
                            Souscrire
                        </a>
                    </div>

                    <!-- AGENCES DE VOYAGES -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow p-8">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <i class="lni lni-bus text-xl text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">AGENCES DE VOYAGES</h3>
                                <p class="text-gray-500">Solution transport</p>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Température moteur en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Gestion carburant (CAN control)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Freinage brusque</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Historique (80 jours)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Technologie GSM/GPRS/GNSS/BLUETOOTH</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full py-3 px-6 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors text-center">
                            Souscrire
                        </a>
                    </div>

                    <!-- REPRESENTATION DIPLOMATIQUE -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow p-8">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="lni lni-shield text-xl text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">DIPLOMATIQUE</h3>
                                <p class="text-gray-500">Organisations internationales</p>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Surveillance vidéo en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Localisation en temps réel</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Historique (90 jours)</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Couverture réseau GSM local et satellitaire</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="lni lni-checkmark-circle text-[#1B1E3D] text-lg mt-1"></i>
                                <span class="text-gray-700 text-sm">Support dédié 24/7</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full py-3 px-6 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors text-center">
                            Souscrire
                        </a>
                    </div>
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
                        <a href="mailto:emperorb007@gmail.com" class="inline-flex items-center justify-center px-6 py-3 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors">
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

        <?php include '../partials/demande.php' ?>
    </main>
    <? include '../partials/footer2.php';?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
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
</body>
</html> 