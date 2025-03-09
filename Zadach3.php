<?php
$Students = [
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];

$Result = [];

foreach ($Students as $Student) {

    $Grade = array_sum($Student['grades']) / count(Student['grades']);
    if ($Grade >= 4) {
        $Result[$student['name']] = round($Grade, 2);
    }
}
foreach ($Result as $Name => $Avg) {
    echo "$Name: $Avg\n";
}
