<?php
$cena = 15.99;
$ilosc = 3;
$suma = $cena * $ilosc;
$rabat = 5;
$doZaplaty = $suma - $rabat;
echo "Cena produktu: " . $cena . " zł<br>";
echo "Liczba sztuk: " . $ilosc . "<br>";
echo "Wartość zakupów: " . $suma . " zł<br>";
echo "Rabat: " . $rabat . " zł<br>";
echo "Do zapłaty: " . $doZaplaty . " zł<br>";
?>