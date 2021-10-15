<?php 

class Car
{

    // Properties
    public $tyres;
    public $doors;
    protected $engine;
    public $wheel;


    //Methods

    public function getTyres() {
        return $tyres;
    }

    protected static function getEngine() {
        return $engine;
    }

    public function getDoors() {
        return $doors;
    }

    public function getWheel() {
        return $wheel;
    }
}

?>
