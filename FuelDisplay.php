<?php
class FuelDisplay implements Observer{
    public function newValue($value)
    {
        echo 'Your tank is filled to ' . $value . '%'."\n\n";
    }
}