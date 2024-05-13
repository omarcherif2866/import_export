



<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/vendor/autoload.php';
require_once('TCPDF-main/tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérez les données du formulaire
    $transport = $_POST["transport"];
    $marchandise = $_POST["marchandise"];
    $Nom_marchandise = $_POST["Nom_marchandise"];
    $Poids = $_POST["Poids"];
    $Mesures = $_POST["Mesures"];
    $conteneur = $_POST["conteneur"];
    $conteneur2 = $_POST["conteneur2"];
    $date = $_POST["date"];
    $paiement = $_POST["paiement"];
    $Nom = $_POST["Nom"];
    $Prénom = $_POST["Prénom"];
    $Téléphone = $_POST["Téléphone"];
    $email = $_POST["mail"];
    $Adresse = $_POST["Adresse"];
    $CP = $_POST["CP"];
    $Ville = $_POST["Ville"];
    $enligne = $_POST["enligne"];
    $cheque = $_POST["cheque"];


    // Validez les entrées (non inclus pour l'instant)

    // Créez un nouveau document PDF
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Ajoutez une page
    $pdf->AddPage();

    // Ajoutez les informations du formulaire au PDF
    $html = "
        <h1>Formulaire de Transport</h1>
        <p><strong>Transport :</strong> $transport</p>
        <p><strong>Marchandise :</strong> $marchandise</p>
        <p><strong>Nom de la Marchandise :</strong> $Nom_marchandise</p>
        <p><strong>Poids :</strong> $Poids</p>
        <p><strong>Mesures :</strong> $Mesures</p>
        <p><strong>Conteneur 1 :</strong> $conteneur</p>
        <p><strong>Conteneur 2 :</strong> $conteneur2</p>
        <p><strong>Date :</strong> $date</p>
        <p><strong>Mode de Paiement :</strong> $paiement</p>
        <p><strong>En :</strong> $cheque $enligne</p>

        <h2>Coordonnées du Client</h2>
        <p><strong>Nom :</strong> $Nom</p>
        <p><strong>Prénom :</strong> $Prénom</p>
        <p><strong>Téléphone :</strong> $Téléphone</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Adresse :</strong> $Adresse</p>
        <p><strong>Code Postal :</strong> $CP</p>
        <p><strong>Ville :</strong> $Ville</p>
    ";

    // Ajoutez le contenu HTML au PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Générez le nom de fichier pour le PDF
    $filename = 'formulaire_transport_' . date('Y-m-d_H-i-s') . '.pdf';

    // Sauvegardez le PDF sur le serveur
    $pdf->Output(__DIR__ . "/$filename", 'F');

    // Envoyez l'e-mail avec le PDF en pièce jointe
    $mail = new PHPMailer(true);

    try {
        // Configuration de l'e-mail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'comar2866@gmail.com'; 
		$mail->Password = 'leym dwvq jgzj dyoc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataire
        $mail->setFrom('comar2866@gmail.com', $email, $email );
        $mail->addAddress('comar2866@gmail.com'); 
        $mail->addReplyTo($email, $name);

        // Contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Formulaire de Transport';
        $mail->Body = 'Veuillez trouver ci-joint le formulaire de transport.';
        $mail->addAttachment(__DIR__ . "/$filename", $filename);

        // Envoyer l'e-mail
        $mail->send();

        // Supprimez le fichier PDF après l'envoi
        unlink(__DIR__ . "/$filename");

        echo "Email envoyé avec succès !";
    } catch (Exception $e) {
        echo "Erreur : {$e->getMessage()}";
    }

} else {
    echo "Erreur : Requête invalide.";
}
