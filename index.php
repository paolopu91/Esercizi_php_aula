<!-- esercizio svolto in aula con il prof Florian per capire come scrivere in php -->


<?php
    $nome="Paolo";
    $cognome="Pugliese";
    $indirizzo = $_GET["indirizzo"];
    $eta = $_GET ["eta"];

    var_dump($_GET);
    echo $indirizzo;
    echo "<br>";
    echo " lunghezza indirizzo" . strlen($indirizzo);
    echo "<br>";
    echo "contiene la parola <strong>roma? </strong>" . stripos($indirizzo, "roma");



     // cambiare la condizione che l'utente scrive
    if(stripos($indirizzo, "milano") !== false){
        $indirizzo = str_replace("milano", "roma", $indirizzo);
    }
    echo "<br>";
    
    echo $indirizzo;


    // condizione if in php
    if(stripos($indirizzo, "roma") !== false){
        echo "<h2>Questo abita a roma!!</h2>";
    }


   
?>

<h1>La pagina funziona <?php echo $nome?> <?php echo $cognome?> </h1>
<h2>Eta Utente :<?php echo $eta ?> </h2>