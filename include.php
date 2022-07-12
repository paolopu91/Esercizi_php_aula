<?php

// grazie ad include scritto in questo modo posso importare 
// il file email.php, questo è possibile farlo con tutti i file e creare anche una logica simil vuejs (TheHeader / TheMain / TheFooter etc...)
include "email.php";


// fa le stesse cose dell'include normale solo che viene usato maggiormente perchè
// permette di poter caricare una sola volta il nostro file anche se lo dovessimo importare piu' volte di seguito
// cosa molto importante è NECESSARIO PER LE FUNZIONI
include_once "email.php";

// require e require_once fanno la stessa cosa dell'include solo che ci da degli errori


?>