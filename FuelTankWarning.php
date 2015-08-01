<?php
class FuelTankWarning implements Observer{

    const isFull = 100;

    // should be a private const(ant), but this is impossible in PHP 5.5
    // DO NOT CHANGE, it is (should be) a constant
    const warnLevel = 5;

    public function newValue($value) {
        if ($value <= self::warnLevel) {
            self::activateLED();
        } elseif ($value > self::warnLevel && $value <= self::isFull) {
            self::deactivateLED();
        } else {
            throw new \Exception('The tank can only be filled up to 100%');
        }

    }

    private function activateLED() {
        echo 'LED: on'."\n";
    }

    private function deactivateLED() {
        echo 'LED: off'."\n";
    }
}