<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NimBus - Transport de Passagers - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">NimBus - Solution de Transport de Passagers</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Optimisez vos services de transport de passagers avec notre solution complète de gestion et de suivi en temps réel.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Obtenir une version démo
                    </a>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités principales -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Fonctionnalités principales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-map-marker text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gestion des arrêts</h3>
                        <p class="text-gray-600">
                            Créez et importez facilement vos arrêts pour une gestion optimale de vos itinéraires.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-route text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Optimisation des routes</h3>
                        <p class="text-gray-600">
                            Planifiez et optimisez vos itinéraires pour une efficacité maximale.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-timer text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gestion des horaires</h3>
                        <p class="text-gray-600">
                            Définissez et gérez facilement les horaires de vos trajets.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-dashboard text-xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Suivi en temps réel</h3>
                        <p class="text-gray-600">
                            Surveillez vos véhicules et recevez des notifications en temps réel.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comment ça marche -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Comment ça marche ?</h2>
                <div class="max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    1
                                </div>
                                <p class="text-gray-600">
                                    Ajoutez ou importez vos arrêts dans le système
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    2
                                </div>
                                <p class="text-gray-600">
                                    Créez vos itinéraires et définissez les horaires
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    3
                                </div>
                                <p class="text-gray-600">
                                    Activez les trajets et suivez les véhicules
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    4
                                </div>
                                <p class="text-gray-600">
                                    Générez des rapports détaillés pour l'analyse
                                </p>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl">
                            <img src="../../images/app-ss/nimbus-dashboard.jpg" alt="NimBus Dashboard" class="rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Caractéristiques avancées -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Caractéristiques avancées</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-lock text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Système ACL</h3>
                        <p class="text-gray-600">
                            Contrôle d'accès avancé pour une sécurité optimale de vos données.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-code text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">API propriétaire</h3>
                        <p class="text-gray-600">
                            Intégration facile avec vos systèmes existants et développements personnalisés.
                        </p>
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