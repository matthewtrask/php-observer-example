<?php
class FuelSensor extends Observeable {
    private $fuelLevel;

    public function setFuelLevel($fuelLevel){
        $this->fuelLevel = $fuelLevel;
        self::notifyObserver($fuelLevel);
    }
}
