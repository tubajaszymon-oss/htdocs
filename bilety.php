
<?php
$wiek = 15;
$maBilet = true;
$jestOpiekun = true;

if (($wiek >= 18 && $maBilet == true) || ($maBilet == true && $jestOpiekun == true)) {
    echo "Możesz wejść.";
} else {
    echo "Brak dostępu.";
}
?>
