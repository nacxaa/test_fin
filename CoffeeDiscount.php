<?php

require_once './CoffeeD.php';

class CoffeeDiscount extends CoffeeD {
    private function getCostDiscount() {
        return 0.9;
    }

    public function getCost() {
        return parent::getCost() * $this->getCostDiscount();
    }
}