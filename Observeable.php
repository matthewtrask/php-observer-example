<?php
abstract class Observeable{
    private $observers = array();

    /**
     * Add an Observer to the $observers Array
     *
     * @param $observer
     */
    final public function addObserver($observer){
        (!in_array($observer,$this->observers))?array_push($this->observers,$observer):void;
    }

    /**
     * Remove an Observer from the $observers Array
     *
     * @param $observer
     */
    final public function removeObserver($observer){
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    /**
     * Notify all Observers about a new Value
     *
     * @param $value
     */
    final protected function notifyObserver($value){
        foreach($this->observers as $observer) {
            $observer::newValue($value);
        }
    }
}