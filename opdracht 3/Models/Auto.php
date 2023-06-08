<?php

class Auto
{
    private string $Naam;
    private string $Type;
    private int $Bouwjaar;
    
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
    
    public function  __construct(string $naam, string $type, int $bouwjaar)
    {
        $this->Naam = $naam;
        $this->Type = $type;
        $this->Bouwjaar = $bouwjaar;
    }   
}

?>