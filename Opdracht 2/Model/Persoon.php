<?php

class Persoon 
{
  private int $Id;
  private string $Voornaam;
  private string $Achternaam;
  private int $Personeelsnummer;

  public function __construct(int $id, string $voornaam, string $achternaam, int $personeelsnummer) 
  {
      $this->Id = $id;
      $this->Voornaam = $voornaam;
      $this->Achternaam = $achternaam;
      $this->Personeelsnummer = $personeelsnummer;
  }

  public function getId(): int {
      return $this->Id;
  }

  public function getVoornaam(): string {
      return $this->Voornaam;
  }

  public function getAchternaam(): string {
      return $this->Achternaam;
  }

  public function getPersoneelsnummer(): int {
      return $this->Personeelsnummer;
  }
}
