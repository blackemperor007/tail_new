<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Intelligente - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Hecterra - Solution Agriculture Intelligente</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Application simple et efficace pour le secteur agricole, permettant le suivi des travaux de terrain à partir des données télématiques.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Obtenir une version démo
                    </a>
                </div>
            </div>
        </section>

        <!-- Caractéristiques principales -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Caractéristiques principales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-control-panel text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Contrôle des équipements spéciaux</h3>
                        <p class="text-gray-600">
                            Données claires sur la qualité et le volume des travaux de terrain, ainsi que sur les actions des machines agricoles.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-checkmark-circle text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fiabilité des données</h3>
                        <p class="text-gray-600">
                            Calcul précis de la surface des champs complexes, incluant chevauchements et zones non cultivées.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-cog text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Automatisation comptable</h3>
                        <p class="text-gray-600">
                            Calcul automatique des surfaces cultivées, consommation de carburant et autres paramètres.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-network text-xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Intégration API</h3>
                        <p class="text-gray-600">
                            Transfert de données vers 1C et autres systèmes comptables via API.
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
                            <i class="lni lni-crop text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Champs et cultures</h3>
                        <p class="text-gray-600">
                            Gestion complète des cultures avec options d'édition et confirmation avant l'ajout à la base de données.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-tractor text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Équipements et conducteurs</h3>
                        <p class="text-gray-600">
                            Suivi complet des équipements spéciaux et gestion des conducteurs.
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
                                    Importez les géozones en tant que champs et configurez les remorques, conducteurs et unités dans Wialon
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    2
                                </div>
                                <p class="text-gray-600">
                                    Remplissez les manuels des cultures, des opérations et de la rotation des cultures
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    3
                                </div>
                                <p class="text-gray-600">
                                    Acceptez ou rejetez la culture des champs trouvée
                                </p>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-[#2A0A55] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                    4
                                </div>
                                <p class="text-gray-600">
                                    Générez et exportez des rapports sur les travaux de terrain
                                </p>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-xl">
                            <img src="../../images/app-ss/driver-behavior-monitoring.png" alt="Hecterra Dashboard" class="rounded-lg shadow-md">
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
        <?php include '../../partials/calling.php';?>
        <?php include '../../partials/demande.php';?>

    </main>
        <?php include '../../partials/footer.php';?>
</body>
</html> 