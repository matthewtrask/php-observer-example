<?php
abstract class Observeable{
    private $observers = array();

    final public function addObserver($observer){
        (!in_array($observer,$this->observers))?array_push($this->observers,$observer):void;
    }

    final public function removeObserver($observer){
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    final protected function notifyObserver($value){
        foreach($this->observers as $observer) {
            $observer::newValue($value);
        }
    }
}
