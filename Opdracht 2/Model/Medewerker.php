<?php

require_once("Persoon.php");
require_once("ISalarisberekenen.php");

class Medewerker extends Persoon implements ISalarisberekenen 
{
  private float $Uurtarief;

  public function __construct(int $id, string $voornaam, string $achternaam, int $personeelsnummer, float $uurtarief) 
  {
      parent::__construct($id, $voornaam, $achternaam, $personeelsnummer);
      $this->Uurtarief = $uurtarief;
  }

  public function getUurtarief(): float 
  {
      return $this->Uurtarief;
  }

  public function berekenLoon(): float 
  {
      // Implementeer hier de logica voor het berekenen van het loon van de medewerker
      // Return het berekende loon als een float
      return $this->Uurtarief * 40;
  }

  public function getInfoPersoon(): string
  {
      return "Naam: " . $this->getVoornaam() . " " . $this->getAchternaam() . "\n" .
             "Personeelsnummer: " . $this->getPersoneelsnummer() . "\n" ;
  }

}

