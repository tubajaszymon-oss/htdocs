<?php
$cena = 15.99;
const VAT = 0.23;
echo "vat: " .(VAT * $cena) . " zł<br>";
echo "vat: " .$cena - (VAT * $cena) . " zł<br>";
?>