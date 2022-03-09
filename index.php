<?php
    echo '<h1>Non dire cazzo</h1>';

    $parola = $_GET['parola'];
    echo $parola;

    echo '<h3>La frase è lunga:</h3>';
    $parolaLunghezza = strlen($parola);
    echo $parolaLunghezza;

    if($parola == 'cazzo') {
        echo '<h3>Hai detto cazzo!</h3>';
        $parolaReplace = str_replace('cazzo', '*****', $parola);
        echo $parolaReplace;
    } else {
        echo '<h3>Bravo! non hia detto cazzo</h3>';
    }
    
?>