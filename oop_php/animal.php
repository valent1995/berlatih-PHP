<?php

class Animal{
    //constructor
    public function __construct($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public $legs = 2;
    public $cold_blooded = 'false';
}
?>