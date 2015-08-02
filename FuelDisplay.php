<?php
class FuelDisplay implements Observer{
    /**
     * Handling a new Value
     *
     * @param $value
     */
    public function newValue($value)
    {
        echo 'Your tank is filled to ' . $value . '%'."\n\n";
    }
}