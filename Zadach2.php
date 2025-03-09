<?php
$Massiv = [52, 85, 76, 88, 78, 78, 54, 66];
$DeleteNum =  array_unique($Massiv);
rsort($DeleteNum);
if (count($Massiv) >= 3) {
    $Max = $Massiv[2];
    echo "Третье максимальное число: $Max\n";
} else {
}
