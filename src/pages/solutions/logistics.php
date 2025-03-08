<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics - Gestion des Flottes de Livraison - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Solution de Gestion des Flottes de Livraison</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Automatisez et numérisez vos opérations de livraison du dernier kilomètre avec notre solution complète de gestion de flotte.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Demander une démo
                    </a>
                </div>
            </div>
        </section>

        <!-- Avantages clés -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Comment Wialon peut aider les flottes de livraison</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-cog text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Moins de travail manuel</h3>
                        <p class="text-gray-600">
                            Automatisation des itinéraires, importation des commandes et intégration avec des applications tierces.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-timer text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Contrôle en temps réel</h3>
                        <p class="text-gray-600">
                            Surveillance en direct, communication avec les chauffeurs et notifications instantanées.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-database text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Données historiques</h3>
                        <p class="text-gray-600">
                            Analyse des itinéraires, durées de livraison et kilométrage pour optimisation.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-camera text-xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Preuve du travail</h3>
                        <p class="text-gray-600">
                            Documentation photo et suivi détaillé des livraisons effectuées.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-alarm-clock text-xl text-yellow-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gain de temps</h3>
                        <p class="text-gray-600">
                            Élimination des processus manuels et de la paperasserie excessive.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-investment text-xl text-teal-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Économie de ressources</h3>
                        <p class="text-gray-600">
                            Optimisation des itinéraires pour réduire les coûts de carburant et l'usure.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités pour les répartiteurs -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Outil de gestion pour les répartiteurs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-map text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Planification des itinéraires</h3>
                        <p class="text-gray-600">
                            Création automatique d'itinéraires optimisés avec estimation des temps d'arrivée et des distances.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-alarm text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Suivi en temps réel</h3>
                        <p class="text-gray-600">
                            Surveillance du processus de livraison avec notifications instantanées.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Application Mobile Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Logistique et gestion des livraisons : application mobile pour les conducteurs et les livreurs</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto items-center">
                    <!-- Fonctionnalités gauche -->
                    <div class="space-y-8">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-map text-xl text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Informations sur les itinéraires et les commandes</h3>
                                    <p class="text-gray-600">
                                        Toutes les informations nécessaires à la livraison sont regroupées dans une seule application et mises à jour en temps réel.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-camera text-xl text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Commentaires et photos</h3>
                                    <p class="text-gray-600">
                                        Les livreurs et les conducteurs laissent des commentaires et des photos sur les commandes pour s'assurer que tous les détails concernant la livraison sont enregistrés.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-map-marker text-xl text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Suivi de l'emplacement</h3>
                                    <p class="text-gray-600">
                                        Il n'est pas nécessaire d'équiper les conducteurs de traceurs GPS si votre projet ne l'implique pas. L'application de gestion des livraisons servira de traceur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image centrale -->
                    <div class="flex justify-center">
                        <img src="../../images/app-ss/logistics-app.jpg" alt="Interface de l'application de livraison" class="max-w-[300px] shadow-xl rounded-3xl">
                    </div>

                    <!-- Fonctionnalités droite -->
                    <div class="space-y-8">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-comments text-xl text-indigo-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Chat avec le répartiteur</h3>
                                    <p class="text-gray-600">
                                        Un chat intégré à l'application est utilisé pour notifier un répartiteur de toute circonstance liée à la livraison.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-bell text-xl text-yellow-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Notifications</h3>
                                    <p class="text-gray-600">
                                        Les conducteurs sont informés des ajustements d'itinéraires et d'autres changements significatifs qui peuvent influencer leurs actions sur l'itinéraire.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require '../..partials/calling.php';?>
        <?php require '../..partials/demande.php';?>

        
    </main>
    <?php require '../..partials/footer.php';?>

</body>
</html> 