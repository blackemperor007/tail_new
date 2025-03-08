<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Abo-Tracking</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-full flex flex-col">
        <?php include'../partials/header2.php'; ?>

    <!-- Spacer for fixed header -->
    <div class="w-full" style="height: calc(3.5rem + 5rem)"></div>

    <!-- Main content -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative py-16 bg-cover bg-center bg-no-repeat min-h-[100px]" 
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/app-ss/banner_x3.jpg');">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-bold text-white mb-6">Centre d'assistance</h1>
                    <p class="text-gray-300 mb-8">
                        Trouvez rapidement des réponses à vos questions et accédez à notre documentation complète.
                    </p>
                </div>
            </div>
        </section>

        <!-- Quick Help Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                    <!-- Documentation -->
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-book text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Documentation</h3>
                        <p class="text-gray-600 mb-4">Guides détaillés et tutoriels pour utiliser nos services.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">En savoir plus →</a>
                    </div>

                    <!-- FAQ -->
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-question-circle text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">FAQ</h3>
                        <p class="text-gray-600 mb-4">Réponses aux questions les plus fréquemment posées.</p>
                        <a href="#" class="text-green-600 hover:text-green-700 font-medium">serviceclient@abotracking.tech →</a>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <i class="lni lni-headphone text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Support Technique</h3>
                        <p class="text-gray-600 mb-4">Besoin d'aide ? Notre équipe est là pour vous.</p>
                        <a href="#" class="text-purple-600 hover:text-purple-700 font-medium">support@abotracking.tech →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12">Questions Fréquentes</h2>
                    
                    <!-- FAQ Items -->
                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="border border-gray-200 rounded-lg">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50">
                                <span class="font-medium">Comment installer le traceur GPS ?</span>
                                <i class="lni lni-chevron-down"></i>
                            </button>
                            <div class="px-6 py-4 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Notre traceur GPS est simple à installer. Il suffit de le brancher sur le port OBD de votre véhicule et de suivre les instructions de l'application mobile.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="border border-gray-200 rounded-lg">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50">
                                <span class="font-medium">Comment accéder aux données de tracking ?</span>
                                <i class="lni lni-chevron-down"></i>
                            </button>
                            <div class="px-6 py-4 border-t border-gray-200">
                                <p class="text-gray-600">
                                    Connectez-vous à votre compte sur notre plateforme web ou via l'application mobile pour accéder à toutes vos données de tracking en temps réel.
                                </p>
                            </div>
                        </div>

                        <!-- Add more FAQ items as needed -->
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
                        <a href="mailto:emperorb007@gmail.com" class="inline-flex items-center justify-center px-6 py-3 bg-[#2A0A55] text-white rounded-lg hover:bg-[#3B1B66] transition-colors">
                            <i class="lni lni-ticket-alt mr-2"></i>
                            Envoyer un email
                        </a>
                        <a href="https://wa.me/237698761410" class="inline-flex items-center justify-center px-6 py-3 border border-[#2A0A55] text-[#2A0A55] rounded-lg hover:bg-[#2A0A55] hover:text-white transition-colors">
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



    <section class="w-full px-8 lg:px-0 flex items-center justify-center">
        <div class="w-full lg:w-5/6 flex items-center justify-between">
            <img src="" alt="">
        </div>
    </section>
    <script>
        let header = document.querySelector("header");
        let topnav = document.querySelector("#topnav");
        let button = document.querySelector("#contain");

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.backgroundColor = "#2A0A55";
                topnav.style.backgroundColor = "#2A0A55";
            } else {
                button.style.backgroundColor = "transparent";
                topnav.style.backgroundColor = "#2A0A55";
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html> 