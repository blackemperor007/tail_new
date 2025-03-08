<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiaTag - Suivi des Équipes Terrain - Abo-Tracking</title>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">WiaTag - Transformez votre Smartphone en Tracker GPS</h1>
                    <p class="text-xl text-gray-200 mb-8">
                        Gérez vos équipes terrain, suivez leurs activités et optimisez leur efficacité avec notre solution mobile complète.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-4 bg-white text-[#2A0A55] font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Démarrer
                    </a>
                </div>
            </div>
        </section>

        <!-- Domaines d'application -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Domaines d'application</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-construction text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Services publics</h3>
                        <p class="text-gray-600">
                            Suivi des équipes de maintenance et d'intervention sur le terrain.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-shield text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Sécurité</h3>
                        <p class="text-gray-600">
                            Surveillance des agents de sécurité et coordination des équipes.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-delivery text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Services de courrier</h3>
                        <p class="text-gray-600">
                            Suivi des livreurs et optimisation des tournées.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-hospital text-xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Services médicaux</h3>
                        <p class="text-gray-600">
                            Coordination des équipes médicales mobiles.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-customer text-xl text-yellow-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Industrie des services</h3>
                        <p class="text-gray-600">
                            Gestion des techniciens et prestataires de services.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-travel text-xl text-teal-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Tourisme</h3>
                        <p class="text-gray-600">
                            Suivi des guides et groupes touristiques.
                        </p>
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
                            <i class="lni lni-mobile text-xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Application mobile intuitive</h3>
                        <p class="text-gray-600">
                            Installation facile et transformation de votre smartphone en tracker de mouvements.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-reload text-xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Données en temps réel</h3>
                        <p class="text-gray-600">
                            Mise à jour automatique des informations avec une interface moderne.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-camera text-xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Multi-données</h3>
                        <p class="text-gray-600">
                            Envoi de photos, messages SOS et données de localisation en un clic.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-user text-xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Statuts personnalisés</h3>
                        <p class="text-gray-600">
                            Gestion des statuts des employés en temps réel.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-cog text-xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gestion à distance</h3>
                        <p class="text-gray-600">
                            Configuration et dépannage à distance des appareils.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-bluetooth text-xl text-indigo-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Intégration BLE</h3>
                        <p class="text-gray-600">
                            Connexion avec les balises Bluetooth pour un suivi amélioré.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comment démarrer -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Comment démarrer avec WiaTag</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="lni lni-user text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Compte Wialon</h3>
                        <p class="text-gray-600">Créez votre compte sur la plateforme</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="lni lni-world text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Accès Internet</h3>
                        <p class="text-gray-600">Assurez une connexion stable</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="lni lni-mobile text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Application WiaTag</h3>
                        <p class="text-gray-600">Installez l'application mobile</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="lni lni-cog text-2xl text-orange-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Configurator</h3>
                        <p class="text-gray-600">Configurez vos paramètres</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Application Mobile Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4">Application mobile WiaTag</h2>
                <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                    Facile à installer, elle transforme votre smartphone en un tracker de mouvements. Les utilisateurs de Wialon peuvent installer l'application gratuitement.
                </p>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto items-center">
                    <!-- Fonctionnalités gauche -->
                    <div class="space-y-8">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-reload text-xl text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Accès à des données actualisées</h3>
                                    <p class="text-gray-600">
                                        Les informations sont automatiquement mises à jour et affichées sur le smartphone dans une interface moderne et claire.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-files text-xl text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Prise en charge de différents types de données</h3>
                                    <p class="text-gray-600">
                                        Les employés peuvent envoyer des photos, des messages SOS ou des données de localisation en appuyant simplement sur un bouton.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-user text-xl text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Statuts des utilisateurs</h3>
                                    <p class="text-gray-600">
                                        L'application vous permet d'utiliser des statuts ("Occupé", "Libre", "En déplacement", etc.) et vous informe instantanément.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image centrale -->
                    <div class="flex justify-center">
                        <img src="../../images/app-ss/wiatag-interface.png" alt="Interface WiaTag" class="max-w-[300px] shadow-xl rounded-3xl">
                    </div>

                    <!-- Fonctionnalités droite -->
                    <div class="space-y-8">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-cog text-xl text-red-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Mode de fonctionnement approprié</h3>
                                    <p class="text-gray-600">
                                        En fonction de la précision des données et de la charge de la batterie souhaitées, l'utilisateur sélectionne un mode parmi ceux disponibles.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-laptop text-xl text-yellow-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Gestion à distance</h3>
                                    <p class="text-gray-600">
                                        L'intégrateur ou l'employeur peut modifier les paramètres et effectuer le dépannage sans accès physique au smartphone.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="lni lni-bluetooth text-xl text-indigo-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Interaction avec les balises BLE</h3>
                                    <p class="text-gray-600">
                                        Le smartphone peut être relié à un appareil BLE pour détecter sa présence à proximité et envoyer cette information.
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