<?php
require_once "User2.php" ;
require_once "customer.php";

$user = new User();
$customer = new Customer();

$user->setFirstName("Giulia");
$user->setLastName("Bianchi");

$customer->setFirstName("Mario");
$customer->setLastName("Rossi");
?>





<!-- 
    
creo file product(prodotto avrà al suo interno titolo e prezzo) che estenderò in cibo cucce e giochi  
creo una classe user
creo una classe cart
creo una classe paymentUser

-->
