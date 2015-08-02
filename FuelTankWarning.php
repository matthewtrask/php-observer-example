<?php
class FuelTankWarning implements Observer{

    /**
     * It should be a private const(ant), but this is impossible in PHP 5.5
     * Maybe it'll be possible in the final version of PHP 7
     */
    const isFull = 100;
    const warnLevel = 5;

    /**
     * Handling a new Value
     *
     * @param $value
     * @throws Exception
     */
    public function newValue($value) {
        if ($value <= self::warnLevel) {
            self::activateLED();
        } elseif ($value > self::warnLevel && $value <= self::isFull) {
            self::deactivateLED();
        } else {
            throw new \Exception('The tank can only be filled up to 100%');
        }

    }

    /**
     * Activating the Fuel Gauge LED
     */
    private function activateLED() {
        echo 'LED: on'."\n";
    }

    /**
     * Deactivating the Fuel Gauge LED
     */
    private function deactivateLED() {
        echo 'LED: off'."\n";
    }
}