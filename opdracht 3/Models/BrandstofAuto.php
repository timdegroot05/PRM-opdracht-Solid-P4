<?php
require_once("../Interfaces/IBrandstofAuto.php");

class BrandstofAuto implements IBrandstofAuto
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

    public function Tanken() : void
    {

    }

    public function MotoAanzetten() : void
    {
        
    }
}


?>