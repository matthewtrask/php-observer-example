<?php
// http://php.net/manual/en/function.spl-autoload-register.php
spl_autoload_register(function ($class) {
    include __DIR__.'/'.$class.'.php';
});

// Object creation/generation
$fuelTankWarning = new FuelTankWarning();
$fuelDisplay = new FuelDisplay();

$fuelSensor = new FuelSensor();

// Our FuelSensor extends Observeable and handles the Observers
$fuelSensor->addObserver($fuelTankWarning);
$fuelSensor->addObserver($fuelDisplay);

// The Observers are triggered by a value change
$fuelSensor->setFuelLevel(80);
$fuelSensor->setFuelLevel(10);
$fuelSensor->setFuelLevel(5);
$fuelSensor->setFuelLevel(1);
$fuelSensor->setFuelLevel(100);

$fuelSensor->removeObserver($fuelTankWarning);
$fuelSensor->removeObserver($fuelDisplay);
// this may cause an error log entry
//[DATE TIME] [error] [client IP] PHP Notice:  Undefined variable: thisIsNotExisting in Example.php on line 26
$fuelSensor->removeObserver($thisIsNotExisting);

// uncommend to throw Exception
//$fuelSensor->setFuelLevel(101);