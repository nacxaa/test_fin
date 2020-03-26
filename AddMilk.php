<?php

require_once './CoffeeD.php';

class AddMilk extends CoffeeD {
    private function getCostMilk() {
        return 0.5;
    }

    public function getCost() {
        return parent::getCost() + $this->getCostMilk();
    }
}