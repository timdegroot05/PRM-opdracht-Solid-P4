<?php
    require_once("Models/TonenAuto.php");

$auto1 = new Auto("Chiron", "BrandstofAuto", 1997);
$auto2 = new Auto("Tesla V5", "ElektrischAuto", 2017);

$toonauto1 = new TonenAuto($auto1);
$toonauto1->ToonInfoAuto();

$toonauto2 = new TonenAuto($auto2);
$toonauto2->ToonInfoAuto();