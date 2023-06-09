<?php
//2
//Each new term in the Fibonacci sequence is generated by adding
// the previous two terms. By starting with 1 and 2, the first 10 terms will be:
//1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
//By considering the terms in the Fibonacci sequence whose values
// do not exceed four million, find the sum of the even-valued terms.
$f1 = 1;
$f2 = 2;
$k = 2;
do {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    if ($f3 % 2 == 0) $k += $f3;
} while ($f3 < 4000000);

var_dump($k);
?>