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
                            <img src="../../images/app-ss/hecterra-dashboard.jpg" alt="Hecterra Dashboard" class="rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-[#2A0A55] py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-6">Prêt à optimiser vos opérations agricoles ?</h2>
                    <p class="text-gray-200 mb-8">
                        Découvrez comment Hecterra peut transformer votre gestion agricole.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="px-8 py-3 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                            Demander une démo
                        </a>
                        <a href="#" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-colors">
                            En savoir plus
                        </a>
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
            <section class="w-full py-16 px-4 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <!-- Titre principal -->
                    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                        Contactez Wialon et atteignez les objectifs les plus ambitieux en télématique
                    </h2>
        
                    <!-- Conteneur des cartes -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Carte Devenir Partenaire -->
                        <div class="bg-[#1B1E3D] rounded-2xl p-8 text-center flex flex-col items-center justify-between h-full">
                            <!-- Icône -->
                            <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
        
                            <!-- Contenu -->
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-white">Devenir un partenaire</h3>
                                <p class="text-gray-300 leading-relaxed">
                                    Rejoignez notre association mondiale d'experts en télématique. Aidez vos clients à transformer leurs entreprises avec des solutions IdO connectées et l'analytique avancée.
                                </p>
                            </div>
        
                            <!-- Bouton -->
                            <a href="#" class="mt-8 inline-block px-6 py-3 bg-white text-[#1B1E3D] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                                ENVOYER UNE DEMANDE
                            </a>
                        </div>
        
                        <!-- Carte Rechercher dans votre région -->
                        <div class="bg-[#2563EB] rounded-2xl p-8 text-center flex flex-col items-center justify-between h-full">
                            <!-- Icône -->
                            <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
        
                            <!-- Contenu -->
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-white">Demandez Wialon dans votre région</h3>
                                <p class="text-gray-100 leading-relaxed">
                                    Obtenez une solution télématique de nos partenaires fiables et améliorez les opérations de votre flotte, réduisez les coûts de maintenance et gérez votre consommation de carburant.
                                </p>
                            </div>
        
                            <!-- Bouton -->
                            <a href="#" class="mt-8 inline-block px-6 py-3 bg-white text-[#2563EB] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                                RECHERCHER SUR LA CARTE
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-[#2A0A55]">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-6">Prêt à optimiser votre flotte de location ?</h2>
                    <p class="text-gray-300 mb-8">
                        Contactez-nous dès aujourd'hui pour une démonstration personnalisée
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#contact"
                            class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#2A0A55] rounded-lg hover:bg-gray-100 transition-colors">
                            Demander une démo
                        </a>
                        <a href="tel:+237698761410"
                            class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white rounded-lg hover:bg-white hover:text-[#2A0A55] transition-colors">
                            <i class="lni lni-phone mr-2"></i>
                            Nous appeler
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

     <!-- Footer -->
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
                            class="w-full sm:w-80 px-4 py-3 rounded-lg bg-gray-700/50 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#2A0A55]">
                        <button
                            class="w-full sm:w-auto px-6 py-3 bg-[#2A0A55] hover:bg-[#3B1B66] text-white font-semibold rounded-lg transition duration-300">
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
                        <img src="../../images/logo-white.png" alt="Abo-Tracking" class="h-8 w-8">
                        <span class="text-white text-2xl font-bold">Abo-Tracking</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Votre bouclier GPS-4G à votre portée. Solutions de tracking professionnel pour votre sécurité.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-twitter-old"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-[#2A0A55] hover:text-white transition-all">
                            <i class="lni lni-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="../../index.html" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="../../pages/bouquets.html" class="text-gray-400 hover:text-white transition-colors">Bouquets</a></li>
                        <li><a href="../../pages/support.html" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                        <li><a href="../../pages/contact.html" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Solutions -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="leasing.html" class="text-gray-400 hover:text-white transition-colors">Leasing de véhicules</a></li>
                        <li><a href="hecterra.html" class="text-gray-400 hover:text-white transition-colors">Agriculture intelligente</a></li>
                        <li><a href="logistics.html" class="text-gray-400 hover:text-white transition-colors">Gestion des flottes</a></li>
                        <li><a href="ecodriving.html" class="text-gray-400 hover:text-white transition-colors">Eco Driving</a></li>
                        <li><a href="fleetrun.html" class="text-gray-400 hover:text-white transition-colors">Maintenance de flotte</a></li>
                        <li><a href="wiatag.html" class="text-gray-400 hover:text-white transition-colors">Équipes terrain</a></li>
                        <li><a href="nimbus.html" class="text-gray-400 hover:text-white transition-colors">Transports publics</a></li>
                        <li><a href="fuel.html" class="text-gray-400 hover:text-white transition-colors">Gestion carburant</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h3 class="text-white text-xl font-semibold">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-phone"></i>
                            <span>+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-envelope-1"></i>
                            <span>contact@abo-tracking.com</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-400">
                            <i class="lni lni-map-marker-5"></i>
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
</body>
</html> 