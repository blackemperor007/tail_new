<?php
require 'config/database.php';

$query = $pdo->query("SELECT * FROM subscribers ORDER BY created_at DESC");
$subscribers = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des abonnés</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Liste des abonnés</h1>
    <table class="border-collapse border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Statut</th>
                <th class="border p-2">Date d’inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscribers as $sub) : ?>
            <tr class="bg-white">
                <td class="border p-2"><?= $sub['id'] ?></td>
                <td class="border p-2"><?= $sub['email'] ?></td>
                <td class="border p-2"><?= $sub['status'] ?></td>
                <td class="border p-2"><?= $sub['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
