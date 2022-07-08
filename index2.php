
<?php 

// le chiavi in questo array sono gli indici (0,1,2 etc...)
$array=["pane", "pasta" , "farina"];

// richiamare un valore del nostro array
echo $array [1];

// come pushare altri valori dentro un array in php
$array[]= "uova";
$array[]= "patate";

var_dump($array);

// in questo array le chiavi le abbiamo date noi in modo custom
$arrayCustom =[
    "chiave1" =>"pane",
    "chiave2" =>"pasta",
    "chiave3" =>"farina",
    "chiave4" =>"uova",
];

// richiamo il valore del nostro array custom
echo $arrayCustom ["chiave1"];

// come pushare valori in un array con chiavi custom
$arrayCustom["nome"]="mario";
$arrayCustom["cognome"]="Rossi";
$arrayCustom["eta"]="45";

var_dump($arrayCustom);




// come fare array con piu oggetti all'interno come in javascript?

$arrayMultidimensionale = [

    [
        "name" => "Paolo",
    ],
    [
        "name" => "Matteo",
    ],
    [
        "name" => "Pino",
    ],
    [
        "name" => "Flavia",
    ]

    ];



?>