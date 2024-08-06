<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST["school-trip-volunteer-titel"];
    $firstName = $_POST["school-trip-volunteer-vorname"];
    $lastName = $_POST["school-trip-volunteer-nachname"];
    $address = $_POST["school-trip-volunteer-strasse"];
    $age = $_POST["school-trip-volunteer-alter"];
    $occupation = $_POST["school-trip-volunteer-beruf"];
    $phone = $_POST["school-trip-volunteer-telefon"];
    $email = $_POST["school-trip-volunteer-email"];
    $diabetes = $_POST["school-trip-volunteer-diabetes"];
    $location = $_POST["school-trip-volunteer-einsatzort"];
    $reason = $_POST["school-trip-volunteer-warum"];

    $body = "Informationen zum Betreuer\n\n";
    $body .= "Titel: $title\n";
    $body .= "Vorname: $firstName\n";
    $body .= "Nachname: $lastName\n";
    $body .= "Anschrift: $address\n";
    $body .= "Alter / Geburtsdatum: $age\n";
    $body .= "Beruf: $occupation\n\n";
    $body .= "Kontaktdaten\n\n";
    $body .= "Telefonnummer: $phone\n";
    $body .= "E-Mail: $email\n";
    $body .= "Selbst Diabetes?: $diabetes\n";
    $body .= "Einsatzort (bundesweit oder begrenzt): $location\n";
    $body .= "Warum Helfer mit Herz werden: $reason";

    $to = "Kathleen.Brockelmann@ddh-m.de";
    $subject = "Antrag Helferherz - $firstName $lastName";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Die Email wurde erfolgreich gesendet!";
    } else {
        echo "Die Email konnte nicht gesendet werden!";
    }
} else {
    echo "Ungültige Anfrage";
}
?>
