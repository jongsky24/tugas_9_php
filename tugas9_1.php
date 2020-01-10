<?php
function fibonacci($n, $x = 0, $y = 1)
{
    $fib = [$x, $y];
    for ($i = 1; $i < $n; $i++) {
        $fib[] = $fib[$i] + $fib[$i - 1];
    }
    return $fib;
}

$data = fibonacci(21);
$a = json_encode($data);
$b = ["[", ",", "]"];
$c = ["", " ", ""];
$d = str_replace($b, $c, $a);

echo $d;
