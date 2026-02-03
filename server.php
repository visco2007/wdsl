<?php

class CambioValuta {

    public function converti($euro, $valuta) {

        switch (strtoupper($valuta)) {
            case "GBP":
                return $euro * 0.86;   // Sterline
            case "USD":
                return $euro * 1.08;   // Dollari
            case "CHF":
                return $euro * 0.95;   // Franchi svizzeri
            case "ITL":
                return $euro * 1936.27; // Lire italiane
            default:
                return 0;
        }
    }
}

$server = new SoapServer("cambioValuta.wsdl");
$server->setClass("CambioValuta");
$server->handle();
