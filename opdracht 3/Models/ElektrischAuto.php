<?php
require_once("../Interfaces/IElektrischAuto.php");

class ElektrischAuto implements IElektrischAuto
{
    # functionality 
    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
     }
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }
    # functionality end

    public function  __construct()
    {

    }   

    public function Opladen() : void
    {

    }

    public function MotoAanzetten() : void
    {
        
    }
}
