<?php
require_once("Factuur.php");

class AfdrukFactuur
{
    private Factuur $Factuur;
    private int $Factuurnummer;
    private string $Factuurdatum;

    public function  __construct(Factuur $factuur, int $factuurnummer, string $factuurdatum)
    {
        $this->Factuur = $factuur;
        $this->Factuurnummer = $factuurnummer;
        $this->Factuurdatum = $factuurdatum;
    }
    
    public function AfdrukFactuur() : void
    {
        echo "Factuurnummer: " . $this->Factuurnummer . "<br/> Factuurdatum: " . $this->Factuurdatum . "<br/> TotaalPrijs: " . $this->Factuur->Bedrag;
    }
}
?>