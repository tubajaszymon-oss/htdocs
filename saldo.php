<?php
$saldo = 100;

$saldo += 50;
echo "Po dodaniu 50: " . $saldo . " zł<br>";

$saldo -= 20;
echo "Po odjęciu 20: " . $saldo . " zł<br>";

$saldo *= 2;
echo "Po pomnożeniu przez 2: " . $saldo . " zł<br>";

$saldo /= 4;
echo "Po podzieleniu przez 4: " . $saldo . " zł<br>";

$saldo++;
echo "Po zwiększeniu o 1: " . $saldo . " zł<br>";
?>
#Starts with 100 zł
#Adds 50 → 150 zł
#Subtracts 20 → 130 zł
#Multiplies by 2 → 260 zł
#Divides by 4 → 65 zł
#Increments by 1 → 66 zł