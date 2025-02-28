<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Adresse email de destination
    $to = "contact@abo-tracking.com"; // Remplacez par votre adresse email

    // En-têtes de l'email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Corps de l'email
    $email_content = "
    <html>
    <head>
        <title>Nouveau message de contact</title>
    </head>
    <body>
        <h2>Nouveau message de contact</h2>
        <p><strong>Nom :</strong> $name</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Sujet :</strong> $subject</p>
        <p><strong>Message :</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // Envoi de l'email
    $mail_sent = mail($to, "Nouveau contact: $subject", $email_content, $headers);

    // Réponse en JSON
    header('Content-Type: application/json');
    if ($mail_sent) {
        echo json_encode(['success' => true, 'message' => 'Votre message a été envoyé avec succès.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Une erreur est survenue lors de l\'envoi du message.']);
    }
    exit;
}
?> 