<?php
$Massiv = [52, 85, 76, 88, 78, 78, 54, 66];
$DeleteNum =  array_unique($Massiv);
rsort($DeleteNum);
if (count($Numbers) >= 3) {
    $Max = $Numbers[2];
    echo "Третье максимальное число: $Max\n";
} else {
    echo "В массиве недостаточно уникальных чисел.\n";
}
