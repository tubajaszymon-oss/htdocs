<?php
$imie = "Anna";
$wiek = 17;
$cena = 12.50;
$liczbaProduktow = 4;
const VAT = 0.23;
echo "Imię: " . $imie . "<br>";
echo "Wiek: " . $wiek . "<br>";
echo "Cena produktu: " . $cena . " zł<br>";
echo "Liczba produktów: " . $liczbaProduktow . "<br>";
echo "Stawka VAT: " . (VAT * 100) . "%<br>";
?>