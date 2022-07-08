<?php 

var_dump($_GET);
$email = key_exists("email", $_GET) ? trim($_GET["email"]) : false;

if(!$email){
    echo "email non presente";
}else {
    // creare i controlli per le nostre mail
    //appena uno dei controlli da fare fallisce, setto subito la mia variabile a false
    $emailValida = true;

    // controllo che non ci siano spazi dentro la mia mail
    if(strpos($email," ")){
        $emailValida = false;
    };

    // controlliamo se abbiamo solo una chiocciola

    if(count(explode("@", $email))>2 ){
        $emailValida = false;
    };

    // contolliamo che ci sia la chiocciola e che dopo ci siano almeno 5 caratteri
    $posizioneChiocciola = strpos($email, "@");
    
    if($posizioneChiocciola < 2 and $posizioneChiocciola >= (strlen($email)-5) ){
        $emailValida = false;
    };



    // controllo che dopo la chiocciola ci siano almeno due caratteri 1 punto e dopo altri due caratteri
    $testoDopoChiocciola = substr($email,$posizioneChiocciola+1);

    $posPunto = strpos($testoDopoChiocciola, ".");

    if($posPunto < 2 or $posPunto >= (strlen($testoDopoChiocciola)-2) ){
        $emailValida= false;
    };
    var_dump($testoDopoChiocciola);


    

    
    var_dump($emailValida);

}

?>