<?php
// Sprawdzenie, czy dane logowania zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Tutaj można dodać kod sprawdzający poprawność danych logowania
    // Na potrzeby tego przykładu założymy, że poprawne dane to "admin" jako nazwa użytkownika i "password" jako hasło
    $correct_username = "admin";
    $correct_password = "password";

    // Sprawdzenie, czy przesłane dane są poprawne
    if ($username === $correct_username && $password === $correct_password) {
        // Jeśli dane są poprawne, przekieruj do strony powitalnej lub wykonaj inne działania
        header("Location: welcome.php");
        exit;
    } else {
        // Jeśli dane są niepoprawne, wyświetl komunikat błędu
        echo "Niepoprawna nazwa użytkownika lub hasło.";
    }
}
?>
