<?php
class FuelSensor extends Observable {
    private $fuelLevel;

    /**
     * Set the new Fuel Level
     *
     * @param $fuelLevel
     */
    public function setFuelLevel($fuelLevel){
        $this->fuelLevel = $fuelLevel;
        self::notifyObserver($fuelLevel);
    }
}
