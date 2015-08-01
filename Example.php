<?php
spl_autoload_register(function ($class) {
    include __DIR__.'/'.$class.'.php';
});

$fuelTankWarning = new FuelTankWarning();
$fuelDisplay = new FuelDisplay();
$fuelSensor = new FuelSensor();
$fuelSensor->addObserver($fuelTankWarning);
$fuelSensor->addObserver($fuelDisplay);

$fuelSensor->setFuelLevel(80);
$fuelSensor->setFuelLevel(10);
$fuelSensor->setFuelLevel(5);
$fuelSensor->setFuelLevel(1);
$fuelSensor->setFuelLevel(100);

// uncommend to throw Exception
//$fuelSensor->setFuelLevel(101);