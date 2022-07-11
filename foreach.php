<?php 
// ciclo for i classico 
for ($i=0; $i < count($_GET) ; $i++) { 
    # code...
    $chiavi = array_keys($_GET);
    $currKey= $chiavi[$i];
    echo $_GET[$currKey];
}

// se volessimo farlo con il for each si fa così
foreach($_GET as $chiave => $valore){
    echo $chiave . "=" . $valore . "<br>";
}



$products = [
    "biscuits",
    "cornflakes",
    "milk"
];

// in questo modo leggo la chiave e il valore 
foreach($products as $chiave => $valore){
    echo $chiave . "=" . $valore . "<br>";
}

// in questo modo leggo solo il valore senza la chiave
foreach($products as $chiave => $valore){
    echo $valore . "<br>";
}













// esercizio snack

$testoMoltoLungo =  "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam ut numquam eligendi doloribus voluptates quae ea ducimus, error voluptatum
                    expedita qui quidem rerum, nostrum aliquid perferendis earum dolorem odit sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam ut numquam eligendi doloribus voluptates quae ea ducimus, error voluptatum
                    expedita qui quidem rerum, nostrum aliquid perferendis earum dolorem odit sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam ut numquam eligendi doloribus voluptates quae ea ducimus, error voluptatum
                    expedita qui quidem rerum, nostrum aliquid perferendis earum dolorem odit sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam ut numquam eligendi doloribus voluptates quae ea ducimus, error voluptatum
                    expedita qui quidem rerum, nostrum aliquid perferendis earum dolorem odit sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nam ut numquam eligendi doloribus voluptates quae ea ducimus, error voluptatum
                    expedita qui quidem rerum, nostrum aliquid perferendis earum dolorem odit sequi.";



$listaParagrafi = explode("\n" , $testoMoltoLungo);

// con questo foreach abbiamo aggiunto degli arry dentro l'array originale
foreach ($listaParagrafi as $indice => $paragrafo){
    $listafrasi = explode(".", $paragrafo);

    // creiamo un'altro for each interno per togliere gli spazi all'inizio e alla fine delle nostre frasi
    foreach($listafrasi as $ifrase =>$frase){
        $listafrasi[$ifrase] = trim($frase);
    }
    

    if(strlen($listafrasi [count($listafrasi) -1]) === 0 ){
        array_pop($listafrasi);
    }
    
    $listaParagrafi[$indice] = $listafrasi;
};

var_dump($listaParagrafi)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 

    foreach($listaParagrafi as $paragrafo){
    ?> 

        <section>
        <?php foreach($paragrafo as $frase){
            if($i === 0){
                echo "<h2>" . $frase . "</h2>";
            }else{
                echo "<p>" . $frase . "</p>";
            }
        }?>
        </section>


   <?php }?>
    
   
    </div>
</body>
</html>