<?php

require_once __DIR__ . "User2.php";

class Customer extends User{
    public $shipmentAddress;
    public $paymentCard;
    public $paymentMethod;


    /**
     * Get the value of shipmentAddress
     */
    public function getShipmentAddress()
    {
        return $this->shipmentAddress;
    }

    /**
     * Set the value of shipmentAddress
     */
    public function setShipmentAddress($shipmentAddress): self
    {
        $this->shipmentAddress = $shipmentAddress;

        return $this;
    }

    /**
     * Get the value of paymentCard
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Set the value of paymentCard
     */
    public function setPaymentCard($paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }
}




?>