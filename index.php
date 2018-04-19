<?php

$a = [1, [2, [3, [4, [5]]]]];
$b = [1, 2, 3, 4, 5];

function f($a) {
    // ここを実装してね
}

$c = f($a);

if ($b === $c) {
    echo "OK";
} else {
    echo "NG";
}
