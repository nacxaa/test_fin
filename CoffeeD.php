<?php

require_once 'CoffeeInterface.php';

class CoffeeD implements \CoffeeInterface {
    public $ownObj;

    public function __construct(CoffeeInterface $obj) {
        $this->ownObj = $obj;
    }

    public function getCost() {
        return $this->ownObj->getCost();
    }
}
