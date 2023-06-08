<?php

require_once("Persoon.php");
require_once("ISalarisberekenen.php");

class Manager extends Persoon implements ISalarisberekenen {
  private float $Uurtarief;
  private float $Bonus;

  public function __construct(int $id, string $voornaam, string $achternaam, int $personeelsnummer, float $uurtarief, float $bonus) 
  {
      parent::__construct($id, $voornaam, $achternaam, $personeelsnummer);
      $this->Uurtarief = $uurtarief;
      $this->Bonus = $bonus;
  }

  public function getUurtarief(): float {
      return $this->Uurtarief;
  }

  public function getBonus(): float {
      return $this->Bonus;
  }

  public function getInfoPersoon(): string
  {
      return "Naam: " . $this->getVoornaam() . " " . $this->getAchternaam() . "\n" .
             "Personeelsnummer: " . $this->getPersoneelsnummer() . "\n" .
              "Bonus: " . $this->getBonus() . "\n";
  }

  public function berekenLoon(): float {
      // Implementeer hier de logica voor het berekenen van het loon van de manager
      // Return het berekende loon als een float
      return $this->Uurtarief * 40 + $this->Bonus;
  }
}

