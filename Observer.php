<?php
interface Observer {
    /**
     * Handling a new Value
     *
     * @param $value
     */
    public function newValue($value);
}

