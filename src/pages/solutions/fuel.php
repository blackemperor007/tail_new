<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Carburant - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Gestion intelligente du carburant</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Réduisez les coûts de carburant de vos clients, la dépense principale des flottes commerciales.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Demander une démo
                    </a>
                </div>
            </div>
        </section>

        <!-- Domaines d'application -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Domaines d'application</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-bus text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Transports publics</h3>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-users text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Transport de passagers</h3>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-delivery text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Livraisons locales</h3>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-truck text-xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Transport longue distance</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités principales -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Fonctionnalités principales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-dashboard text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Vue d'ensemble</h3>
                        <p class="text-gray-600">
                            Suivez chaque litre de carburant et son impact budgétaire, globalement ou par véhicule, conducteur, trajet.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-timer text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Contrôle en temps réel</h3>
                        <p class="text-gray-600">
                            Vérifiez la consommation et le niveau de carburant en quelques clics sans contrôles physiques.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-graph text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Données historiques</h3>
                        <p class="text-gray-600">
                            Optimisez votre budget grâce à une analyse régulière des données de carburant.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avantages -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Avantages du système</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex-shrink-0 flex items-center justify-center">
                            <i class="lni lni-cog text-xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Automatisation</h3>
                            <p class="text-gray-600">
                                Envoyez automatiquement les données de carburant vers d'autres applications internes.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex-shrink-0 flex items-center justify-center">
                            <i class="lni lni-timer text-xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Gain de temps</h3>
                            <p class="text-gray-600">
                                Éliminez Excel et la collecte manuelle pour économiser temps et ressources.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require '../..partials/calling.php';?>
        <?php require '../..partials/demande.php';?>
    </main>
    <?php require '../..partials/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../../script.js"></script>
</body>
</html> 