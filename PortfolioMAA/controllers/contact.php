<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    $to = "mathias.adames@example.com";
    $subject = "Contact depuis le portfolio";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Message envoyé avec succès !');</script>";
    } else {
        echo "<script>alert('Échec de l'envoi du message.');</script>";
    }
}
?>
