<?php

class Boek
{
    private string $Naam;
    private string $Auteur;
    private int $Jaar;
    private float $Prijs;
    private int $Isbn;

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

    public function  __construct(string $naam, string $auteur, int $jaar, float $prijs, int $isbn)
    {
        $this->Naam = $naam;
        $this->Auteur = $auteur;
        $this->Jaar = $jaar;
        $this->Prijs = $prijs;
        $this->Isbn = $isbn;
    }   
}

?>