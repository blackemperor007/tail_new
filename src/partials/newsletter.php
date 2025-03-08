<?php
require 'config/database.php';

$message = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            // Insérer l'email dans la base de données
            $query = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
            $query->execute([$email]);

            // Message de succès
            $message = "✅ Inscription réussie à la newsletter !";
        } catch (PDOException $e) {
            $message = "❌ Erreur : " . $e->getMessage();
        }
    } else {
        $message = "❌ Email invalide !";
    }
}
?>

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
                <?php if ($message): ?>
                    <p class="text-sm font-semibold <?= strpos($message, '✅') !== false ? 'text-green-500' : 'text-red-500' ?>">
                        <?= $message ?>
                    </p>
                <?php endif; ?>
            </div>
            <form action="" method="POST" class="w-full md:w-auto flex flex-col sm:flex-row gap-3">
                <input type="email" name="email" placeholder="Votre adresse email"
                    class="w-full sm:w-80 px-4 py-3 rounded-lg bg-gray-700/50 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#1B1E3D]" required>
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-3 bg-[#1B1E3D] hover:bg-[#3B1B66] text-white font-semibold rounded-lg transition duration-300">
                    S'abonner
                </button>
            </form>
        </div>
    </div>
</div>