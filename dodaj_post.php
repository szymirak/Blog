<?php
// Sprawdź, czy zostało przesłane hasło z formularza
if (isset($_POST["haslo"]) && $_POST["haslo"] === "twoje_haslo") {
    // Hasło jest poprawne, można dodać post

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tytul = $_POST["tytul"];
        $tresc = $_POST["tresc"];

        // Tutaj możesz dodać kod do zapisywania danych do bazy danych lub pliku, w zależności od Twoich potrzeb.

        // Po zapisaniu danych możesz przekierować użytkownika na stronę potwierdzenia lub na główną stronę bloga.
        header("Location: potwierdzenie.php");
        exit();
    }
} else {
    // Hasło jest niepoprawne, możesz wyświetlić odpowiedni komunikat lub przekierować użytkownika na inną stronę.
    echo "Niepoprawne hasło.";
}
?>
