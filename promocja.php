
<?php
$liczbaProduktow = 2;
$wartoscZakupow = 150;

if ($liczbaProduktow >= 2 && $wartoscZakupow >= 100) {
    $rabat = $wartoscZakupow * 0.10;
} else {
    $rabat = 0;
}

$doZaplaty = $wartoscZakupow - $rabat;

echo "Wartość zakupów: " . $wartoscZakupow . " zł<br>";
echo "Kwota rabatu: " . $rabat . " zł<br>";
echo "Do zapłaty: " . $doZaplaty . " zł<br>";
?>
