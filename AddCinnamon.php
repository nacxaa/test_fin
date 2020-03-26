<?php

require_once './CoffeeD.php';

class AddCinnamon extends CoffeeD {
    private function getCostCinamon() {
        return 0.3;
    }

    public function getCost() {
        return parent::getCost() + $this->getCostCinamon();
    }
}