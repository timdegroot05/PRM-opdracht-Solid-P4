<?php
require_once("Boek.php");

class Factuur
{
    private Boek $ArtikelBoek;
    private int $Aantal;
    private float $Korting;
    private float $Btw;
    public float $Bedrag;

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

    public function  __construct(Boek $artikelboek , int $aantal, float $korting, float $btw)
    {
        $this->ArtikelBoek  = $artikelboek ;
        $this->Aantal = $aantal;
        $this->Korting = $korting;
        $this->Btw = $btw;
        $this->Bedrag = $this->BerekenTotaalBedrag();
    }   

    public function BerekenTotaalBedrag() : float
    {
        return $this->ArtikelBoek->Prijs * $this->Aantal * $this->Korting * $this->Btw;
    }
}


?>