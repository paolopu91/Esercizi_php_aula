<?php

// creare una classe di un singolo utente
// attribbuti: nome cognome dataNascita

//la nostra classe va messa in un file separato come se fosse un data base
//e richiamato nel file tramite un require_once(questo va sempre usato)
class User {
    public $titolo = "Sig.";
    public $nome;
    public $cognome;
    public $dataNascita;

    // questa si mette per prima e ci permette di passare dei dati INDISPENSABILI per le istanze
    //PER INDISPENSABILI INTENDIAMO TUTTI QUEI DATI CHE SONO PRESENTI IN ENTRAMBE LE ISTANZE (NOME COGNOME E DATA)
    function __construct($_nome, $_cognome,$_dataNascita){
        var_dump("istanza creata");
        $this->nome =$_nome;
        $this->cognome =$_cognome;
        $this->dataNascita= $_dataNascita;
    }

    public function getFullName(){
        return $this ->nome . " " . $this->cognome;
    }

    public function getAge(){
        $currYear= date("Y");
        return $currYear - $this->dataNascita;
    }

    public function setSconto($eta){
        if($eta < 18){
            $this->sconto = 5;
        }elseif($eta>=18 ){
            $this->sconto = 2;
        }elseif($eta >=35){
            $this->sconto= 10;
        }elseif($eta > 50){
          $this->sconto=20;
        }
    }
}

// questa è un'istanza di user 1
$utente1 = new User("Mario", "Rossi", 1965);
// $utente1->nome = "Mario";
// $utente1->cognome = "Rossi";
// $utente1->dataNascita = 1965;
$utente1->setSconto($utente1->getAge());

// questa è una seconda istanza di user 2
$utente2= new User("Giulia", "Bianchi", 2000);
// $utente2 ->nome ="Giulia";
// $utente2 ->cognome ="Bianchi";
// $utente2 ->dataNascita = 2000;
$utente2 ->titolo = "Sig.na";
$utente2->setSconto($utente2->getAge());



var_dump($utente1);
var_dump($utente2);

echo "L'utente " . $utente1->getFullName() . " è nato nel " .$utente1->dataNascita . " ed ha " .$utente1->getAge() . "<br>";
echo "L'utente " . $utente2->getFullName() ." è nato nel " .$utente2->dataNascita . " ed ha " .$utente2->getAge() . "<br>";


