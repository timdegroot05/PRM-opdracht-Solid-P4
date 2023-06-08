<?php
require_once("Models/Boek.php");
require_once("Models/Factuur.php");
require_once("Models/AfdrukFactuur.php");


$boek          = new Boek("The Adventures of aasc","aasc",1993,38.95,491725);
$factuur       = new Factuur($boek,2,0.80,1.09);
$afdrukfactuur = new AfdrukFactuur($factuur, 188425,"04-05-2022");

echo($afdrukfactuur->AfdrukFactuur());


?>