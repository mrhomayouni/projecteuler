<?php

$sum = 0;
for ($i = 2; $i <= 295245; $i++) {
    if ($i == sum_fifth_power($i)) {
        $sum += $i;
    }
}
echo $sum;

function sum_fifth_power($number, $sum = 0)
{
    if ($number == 0) {
        return $sum;
    }

    $k = $number % 10;
    $sum += $k ** 5;

    $number = floor($number / 10);

    return sum_fifth_power($number, $sum);
}
