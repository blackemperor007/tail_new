<?php
// Connexion à la base de données
require '../config/database.php';  // Assurez-vous que ce fichier contient les informations de connexion à la base de données.

try {
    // Récupérer les abonnés
    $subscribersQuery = $pdo->query("SELECT * FROM subscribers ORDER BY created_at DESC");
    $subscribers = $subscribersQuery->fetchAll();

    // Récupérer les messages de contact
    $contactMessagesQuery = $pdo->query("SELECT * FROM contact_messages ORDER BY date_sent DESC");
    $contactMessages = $contactMessagesQuery->fetchAll();

    // Vérification de la demande de suppression
    if (isset($_GET['delete_subscriber_id'])) {
        $subscriber_id = intval($_GET['delete_subscriber_id']);
        $deleteQuery = $pdo->prepare("DELETE FROM subscribers WHERE id = ?");
        $deleteQuery->execute([$subscriber_id]);
        header('Location: view_data.php');
        exit();
    }

    if (isset($_GET['delete_message_id'])) {
        $message_id = intval($_GET['delete_message_id']);
        $deleteQuery = $pdo->prepare("DELETE FROM contact_messages WHERE id = ?");
        $deleteQuery->execute([$message_id]);
        header('Location: view_data.php');
        exit();
    }
} catch (PDOException $e) {
    die("Erreur de connexion ou de requête: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Abonnés et Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-white mb-8">Gestion des Abonnés et des Messages de Contact</h1>

    <!-- Abonnés -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-300">Abonnés à la Newsletter</h2>
        <table class="min-w-full mt-4 table-auto border-collapse border border-gray-700">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Date d'Inscription</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscribers as $subscriber): ?>
                    <tr class="bg-gray-800">
                        <td class="px-4 py-2"><?= $subscriber['id'] ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($subscriber['email']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($subscriber['status']) ?></td>
                        <td class="px-4 py-2"><?= $subscriber['created_at'] ?></td>
                        <td class="px-4 py-2">
                            <a href="view_data.php?delete_subscriber_id=<?= $subscriber['id'] ?>" class="text-red-600 hover:text-red-800">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Messages de contact -->
    <div>
        <h2 class="text-2xl font-semibold text-gray-300">Messages de Contact</h2>
        <table class="min-w-full mt-4 table-auto border-collapse border border-gray-700">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nom</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Sujet</th>
                    <th class="px-4 py-2 text-left">Message</th>
                    <th class="px-4 py-2 text-left">Date d'envoi</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactMessages as $message): ?>
                    <tr class="bg-gray-800">
                        <td class="px-4 py-2"><?= $message['id'] ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($message['name']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($message['email']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($message['subject']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($message['message']) ?></td>
                        <td class="px-4 py-2"><?= $message['date_sent'] ?></td>
                        <td class="px-4 py-2">
                            <a href="view_data.php?delete_message_id=<?= $message['id'] ?>" class="text-red-600 hover:text-red-800">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
