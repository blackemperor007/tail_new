<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleetrun - Maintenance de Flotte - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Fleetrun - Gestion de Maintenance de Flotte</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Optimisez la maintenance de votre flotte, réduisez les coûts d'exploitation et évitez les pannes critiques.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                            Obtenir une démo
                        </a>
                        <a href="#register" class="px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-colors">
                            S'inscrire
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avantages clés -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Avantages clés</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-shield text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Réduisez les risques</h3>
                        <p class="text-gray-600">
                            Planifiez la maintenance en tenant compte des véhicules immobilisés ou nécessitant bientôt un service.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-calculator text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Évaluez les coûts</h3>
                        <p class="text-gray-600">
                            Optimisez vos investissements en fonction du kilométrage et de l'état des véhicules.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-users text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gérez plusieurs flottes</h3>
                        <p class="text-gray-600">
                            Créez une hiérarchie d'utilisateurs avec des droits d'accès personnalisés.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-timer text-xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Réagissez à temps</h3>
                        <p class="text-gray-600">
                            Suivez l'état de la flotte et anticipez les besoins de maintenance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Fonctionnalités principales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-list text-xl text-blue-600"></i>
                        </div>
                    </div>

                    <div class="lg:w-1/2 relative">
                        <img src="../../images/solutions/fleetrun-hero.png" alt="Fleetrun Dashboard" class="w-full rounded-xl shadow-2xl">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
                            <div class="text-sm font-semibold text-gray-800">Coûts réduits</div>
                            <div class="text-2xl font-bold text-[#2A0A55]">-20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h3 class="text-blue-600 font-medium mb-2">Fonctionnalités</h3>
                    <h2 class="text-4xl font-bold text-gray-900">Gestion de maintenance intelligente</h2>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-1/2 space-y-4">
                        <!-- Planification maintenance -->
                        <div class="feature-item group cursor-pointer" data-target="planning-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-red-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-calendar text-2xl text-red-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-red-600">Planification maintenance</h3>
                                        <p class="text-gray-600 mt-2">Programmation automatique des entretiens préventifs</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Suivi des réparations -->
                        <div class="feature-item group cursor-pointer" data-target="repairs-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-blue-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-cog text-2xl text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600">Suivi des réparations</h3>
                                        <p class="text-gray-600 mt-2">Historique complet des interventions et réparations</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gestion des coûts -->
                        <div class="feature-item group cursor-pointer" data-target="costs-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-green-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-dollar text-2xl text-green-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600">Gestion des coûts</h3>
                                        <p class="text-gray-600 mt-2">Suivi détaillé des dépenses de maintenance</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alertes et notifications -->
                        <div class="feature-item group cursor-pointer" data-target="alerts-image">
                            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 group-hover:border-yellow-500">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <i class="lni lni-alarm text-2xl text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-600">Alertes et notifications</h3>
                                        <p class="text-gray-600 mt-2">Rappels automatiques des entretiens à venir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Zone d'affichage des images -->
                    <div class="lg:w-1/2 bg-white rounded-2xl p-6 shadow-lg">
                        <div class="relative h-[500px] overflow-hidden rounded-xl">
                            <!-- Images des fonctionnalités -->
                            <img src="../../images/solution/fleetrun-planning.png" alt="Planification" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="planning-image">
                            <img src="../../images/solution/fleetrun-repairs.png" alt="Réparations" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="repairs-image">
                            <img src="../../images/solution/fleetrun-costs.png" alt="Coûts" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="costs-image">
                            <img src="../../images/solution/fleetrun-alerts.png" alt="Alertes" class="feature-image absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0" id="alerts-image">
                            
                            <!-- État par défaut -->
                            <div class="absolute inset-0 flex items-center justify-center bg-gray-100" id="default-state">
                                <p class="text-gray-500 text-lg">Sélectionnez une fonctionnalité pour voir les détails</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Problem Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Les défis de la maintenance de flotte</h2>
                    <p class="text-gray-600">
                        Anticipez les pannes et optimisez vos interventions de maintenance
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-cog text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Maintenance Prédictive</h3>
                        <p class="text-gray-600">Anticipez les besoins de maintenance avant les pannes</p>
                    </div>
                    <!-- ... autres défis ... -->
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

        <?php require '../../partials/calling.php';?>
        <?php require '../../partials/demande.php';?>
    </main>
    <?php require '../../partials/footer.php';?>
</body>
</html> 