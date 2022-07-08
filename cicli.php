<?php 
    $listaParola = [
        "ciao",
        "halo",
        "camino",
        "coso",
        "casa",
        "chiesa",
        "credimi",
        "scusi",
        "buongiorno",
        "buonasera",
        "salve",
        "hola",
        "we",
    ];

    $parola = key_exists("parola" , $_GET) ? $_GET ["parola"] : "";
    
    // controllare se nel mio array c'è la parola dell'utente

        // soluzione semplice
    // $parolaEsiste = in_array($parola, $listaParola);

    // soluzione con i cicli

    $parolaEsiste;

    for($i = 0 ; $i < count($listaParola); $i++){
        $parolaCorrente = $listaParola[$i];

        if($parolaCorrente === $parola){
            $parolaEsiste = $i;
            break;
        };
    };

    if(isset($parolaEsiste)){
        echo "Parola trova all'indice" .$parolaEsiste;
        var_dump($parolaEsiste);
    };
    
    
?>