<?php

$dati = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi"
    ],
    [
        "nome" => "Mario",
        "cognome" => "Verdi"
    ],
    [
        "nome" => "Mario",
        "cognome" => "Gialli"
    ],

    ];
    
header("content-type : application/json");
echo json_encode($dati);

?>