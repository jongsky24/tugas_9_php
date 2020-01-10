<?php
function prime_numbers($num)
{
    return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $num));
}

$start = 0;
$end = 200;

$i = $start;
while ($i <= $end) {
    if (prime_numbers($i)) echo $i . ",";
    $i++;
}
