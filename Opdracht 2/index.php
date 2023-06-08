<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


require_once 'Model/Persoon.php';
require_once 'Model/ISalarisberekenen.php';
require_once 'Model/Manager.php';
require_once 'Model/Medewerker.php';
require_once 'Model/Loonstrookje.php';

// Maak een instantie van de Manager-klasse
$manager = new Manager(1, "John", "Doe", 12345, 25.0, 500.0);

// Maak een instantie van de Medewerker-klasse
$medewerker = new Medewerker(2, "Jane", "Smith", 54321, 20.0);

// Bereken het loon voor de manager en de medewerker
$loonManager = $manager->berekenLoon();
$loonMedewerker = $medewerker->berekenLoon();

// Maak een loonstrookje voor de manager en de medewerker
$loonstrookjeManager = new Loonstrookje($manager, $loonManager);
$loonstrookjeMedewerker = new Loonstrookje($medewerker, $loonMedewerker);

// Druk de loonstrookjes af
echo $loonstrookjeManager->printLoonstrook() . "<br>";
echo $loonstrookjeMedewerker->printLoonstrook() . "<br>";

?>

    
</body>
</html>

