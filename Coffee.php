<?php

require_once './CoffeeInterface.php';

class Coffee implements CoffeeInterface {
    public function getCost() {
        return 2;
    }
}
