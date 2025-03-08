<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Abo-Tracking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="../output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full flex flex-col">
    <?php include'../partials/header2.php'; ?>

    <!-- Spacer for fixed header -->
    <div class="w-full" style="height: calc(3.5rem + 5rem)"></div>

    <!-- Main content - Fills available space -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative py-16 bg-cover bg-center bg-no-repeat min-h-[100px]" 
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/app-ss/banner_x3.jpg');">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-bold text-white mb-6">Contactez-Nous</h1>
                    <p class="text-gray-300 mb-8">
                        Trouvez rapidement des réponses à vos questions et accédez à notre documentation complète.
                    </p>
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
                        <a href="mailto:@gmail.com" class="inline-flex items-center justify-center px-6 py-3 bg-[#1B1E3D] text-white rounded-lg hover:bg-[#3B1B66] transition-colors">
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


        <div class="w-full" style="height: calc(2.5rem)"></div>
        
        <section class="relative" id="contact">
            <!-- Background Image Section -->
            <div class="h-[400px] w-full bg-cover bg-center" 
                style="background-image: url('../images/app-ss/app-1.jpg');">
            </div>
            
            <!-- White Background Bottom Section -->
            <div class="h-[300px] w-full bg-white"></div>

            <!-- Floating Contact Card -->
            <div class="absolute inset-x-0 top-[100px]">
                <div class="container mx-auto px-4">
                    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <!-- Left Side - Contact Form -->
                            <div class="p-8 space-y-6">
                                <form id="contactForm" class="space-y-6" method="POST">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700" data-i18n="fullName">Nom complet</label>
                                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                        </div>
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700" data-i18n="email">Email</label>
                                            <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="subject" class="block text-sm font-medium text-gray-700" data-i18n="subject">Sujet</label>
                                        <input type="text" id="subject" name="subject" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]">
                                    </div>
                                    <div>
                                        <label for="message" class="block text-sm font-medium text-gray-700" data-i18n="message">Message</label>
                                        <textarea id="message" name="message" rows="6" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-[#1B1E3D] focus:border-[#1B1E3D]"></textarea>
                                    </div>
                                    <button type="submit" id="submitBtn" class="w-full px-6 py-4 bg-[#1B1E3D] text-white font-semibold rounded-lg hover:bg-[#3B1B66] transition-colors" data-i18n="sendMessage">
                                        Envoyer le message
                                    </button>
                                    <div id="formMessage" class="hidden mt-4 p-4 rounded-lg"></div>
                                </form>
                            </div>

                            <!-- Right Side - Contact Info -->
                            <div class="bg-gray-50 p-8">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Technical Support -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-headphone text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Technical support</h3>
                                            <p class="text-gray-600 text-sm">support@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Sales Questions -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-dollar text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Sales questions</h3>
                                            <p class="text-gray-600 text-sm">cindybethel@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Press -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-facebook text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Press</h3>
                                            <p class="text-gray-600 text-sm">info@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>

                                    <!-- Bug Report -->
                                    <div class="space-y-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="lni lni-bug text-2xl text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-gray-900 font-medium">Bug report</h3>
                                            <p class="text-gray-600 text-sm">serviceclient@abotracking.tech</p>
                                            <p class="text-gray-600 text-sm">+1 234-567-89</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="w-full" style="height: calc(2.5rem)"></div>
        <!-- Map Section -->
        <section class="relative z-10 mt-[-100px] pb-0">
            <!-- Full Width Map Container -->
            <div class="w-full h-[400px]">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.3721619999999997!3d48.8583736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sfr!2sfr!4v1647436435286!5m2!1sfr!2sfr"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
<?php include '../partials/demande.php' ?>
    </main>

    <? include '../partials/footer2.php';?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const formMessage = document.getElementById('formMessage');

        // Fonction pour afficher les messages
        function showMessage(success, message) {
            formMessage.classList.remove('hidden');
            formMessage.className = `mt-4 p-4 rounded-lg ${success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'}`;
            formMessage.textContent = message;
        }

        // Fonction pour valider l'email
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Validation côté client
            const name = form.querySelector('#name').value.trim();
            const email = form.querySelector('#email').value.trim();
            const subject = form.querySelector('#subject').value.trim();
            const message = form.querySelector('#message').value.trim();

            // Vérification des champs requis
            if (!name || !email || !subject || !message) {
                showMessage(false, translations[currentLanguage].requiredField);
                return;
            }

            // Validation de l'email
            if (!isValidEmail(email)) {
                showMessage(false, translations[currentLanguage].invalidEmail);
                return;
            }

            // Désactiver le bouton pendant l'envoi
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="lni lni-spinner lni-spin-effect"></i> ' + translations[currentLanguage].sending;

            try {
                const formData = new FormData(form);
                const response = await fetch('../php/send_email.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    showMessage(true, data.message);
                    form.reset();
                } else {
                    showMessage(false, data.message);
                }
            } catch (error) {
                showMessage(false, translations[currentLanguage].errorMessage);
                console.error('Erreur:', error);
            } finally {
                // Réactiver le bouton
                submitBtn.disabled = false;
                submitBtn.innerHTML = translations[currentLanguage].sendMessage;
            }
        });
    });
    </script>
</body>

</html>