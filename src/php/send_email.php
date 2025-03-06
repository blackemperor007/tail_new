<?php
header('Content-Type: application/json');

// Activer la gestion des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Vérifier la méthode de requête
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo json_encode([
        'success' => false,
        'message' => 'Méthode non autorisée'
    ]);
    exit;
}

// Récupérer et nettoyer les données du formulaire
$name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['subject'] ?? '', FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);

// Valider les données
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode([
        'success' => false,
        'message' => 'Tous les champs sont requis'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Adresse email invalide'
    ]);
    exit;
}

// Configuration de l'email
$to = "emperorb007@gmail.com";
ini_set("SMTP", "smtp.mailtrap.io");
ini_set("smtp_port", "2525");
ini_set("sendmail_from", "from@example.com");
ini_set("smtp_user", "votre_username_mailtrap");
ini_set("smtp_pass", "votre_password_mailtrap");
$email_subject = "Nouveau message de contact: " . $subject;

// Création du corps de l'email
$email_body = "Vous avez reçu un nouveau message.\n\n".
    "Détails:\n\n".
    "Nom: " . $name . "\n".
    "Email: " . $email . "\n".
    "Sujet: " . $subject . "\n".
    "Message:\n" . $message . "\n";

// En-têtes de l'email
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Tentative d'envoi de l'email
try {
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email envoyé avec succès
        echo json_encode([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès !'
        ]);
    } else {
        // Échec de l'envoi
        throw new Exception("Échec de l'envoi de l'email");
    }
} catch (Exception $e) {
    // Gestion des erreurs
    error_log("Erreur d'envoi d'email: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard."
    ]);
}
?> 