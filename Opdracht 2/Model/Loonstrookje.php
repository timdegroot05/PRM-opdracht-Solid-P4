<?php

interface ISalarisberekenen {
    public function getInfoPersoon(): string;
    public function berekenLoon(): float;
}

class Medewerker implements ISalarisberekenen {
    private string $naam;
    private float $uurloon;
    private int $gewerkteUren;

    public function __construct(string $naam, float $uurloon, int $gewerkteUren) {
        $this->naam = $naam;
        $this->uurloon = $uurloon;
        $this->gewerkteUren = $gewerkteUren;
    }

    public function getInfoPersoon(): string {
        return $this->naam;
    }

    public function berekenLoon(): float {
        return $this->uurloon * $this->gewerkteUren;
    }
}

class Manager implements ISalarisberekenen {
    private string $naam;
    private float $maandsalaris;

    public function __construct(string $naam, float $maandsalaris) {
        $this->naam = $naam;
        $this->maandsalaris = $maandsalaris;
    }

    public function getInfoPersoon(): string {
        return $this->naam;
    }

    public function berekenLoon(): float {
        return $this->maandsalaris;
    }
}

class Loonstrookje {
    private ISalarisberekenen $salaris;
    private float $bedrag;

    public function __construct(ISalarisberekenen $salaris, float $bedrag) {
        $this->salaris = $salaris;
        $this->bedrag = $bedrag;
    }

    public function getMedewerker(): ISalarisberekenen {
        return $this->salaris;
    }

    public function getBedrag(): float {
        return $this->bedrag;
    }

    public function printLoonstrook(): void {
        echo "Loonstrookje\n";
        echo "-----------------\n";
        echo "Naam: " . $this->salaris->getInfoPersoon() . "\n";
        echo "Salaris: " . $this->salaris->berekenLoon() . "\n";
        echo "-----------------\n";
    }
}

$medewerker = new Medewerker("John Doe", 10.0, 160); 
$manager = new Manager("Jane Smith", 3000.0); 

$loonstrookMedewerker = new Loonstrookje($medewerker, 1000.0); 
$loonstrookManager = new Loonstrookje($manager, 2000.0);

$loonstrookMedewerker->printLoonstrook();
$loonstrookManager->printLoonstrook(); 
