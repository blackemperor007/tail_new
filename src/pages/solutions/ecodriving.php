<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Driving - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Eco Driving - Conduite Intelligente</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Évaluez le professionnalisme de vos conducteurs et optimisez la sécurité et l'efficacité de votre flotte.
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
                <h2 class="text-3xl font-bold text-center mb-12">Avantages clés</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-fuel text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Économie de carburant</h3>
                        <p class="text-gray-600">
                            Réduisez la consommation de carburant en optimisant les manœuvres et la vitesse de conduite.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-shield text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Sécurité renforcée</h3>
                        <p class="text-gray-600">
                            Améliorez la sécurité des passagers, du fret et des autres usagers de la route.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-cog text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Maintenance optimisée</h3>
                        <p class="text-gray-600">
                            Prolongez la durée de vie des véhicules et réduisez la fréquence des réparations.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités détaillées -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Fonctionnalités détaillées</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-dashboard text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Évaluation de la conduite</h3>
                        <p class="text-gray-600">
                            Détection des infractions : excès de vitesse, accélération et freinage injustifiés, accélération en virage.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-graph text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Analyse des trajets</h3>
                        <p class="text-gray-600">
                            Visualisation détaillée des trajets avec carte et tableau des infractions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comment ça marche -->
        <section class="py-16">
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
                                    Collecte des données télématiques via les capteurs installés
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    2
                                </div>
                                <p class="text-gray-600">
                                    Configuration des paramètres de contrôle de la qualité de conduite
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    3
                                </div>
                                <p class="text-gray-600">
                                    Définition du système de points de pénalité
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    4
                                </div>
                                <p class="text-gray-600">
                                    Génération et analyse des rapports pour amélioration continue
                                </p>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-xl">
                            <img src="../../images/app-ss/eco-driving-dashboard.jpg" alt="Eco Driving Dashboard" class="rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bénéfices supplémentaires -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Bénéfices supplémentaires</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-users text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Productivité du personnel</h3>
                        <p class="text-gray-600">
                            Identifiez et formez rapidement les conducteurs, récompensez les meilleurs performances.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-leaf text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Impact écologique</h3>
                        <p class="text-gray-600">
                            Réduisez les émissions dans l'environnement grâce à une meilleure qualité de conduite.
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