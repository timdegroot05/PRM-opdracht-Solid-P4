<?php
require_once("Auto.php");

    class TonenAuto
    {
        private Auto $Auto;

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

        public function __construct(Auto $auto)
        {
            $this->Auto = $auto;
        }

        public function ToonInfoAuto() : void
        {
            echo("---------------------------");
            echo("<h2>Auto</h2>");
            echo("<p>Naam: " . $this->Auto->Naam . "</p>");
            echo("<p>Type: " . $this->Auto->Type . "</p>");
            echo("<p>Bouwjaar: " . $this->Auto->Bouwjaar . "</p>"); 
        }
    }

?>