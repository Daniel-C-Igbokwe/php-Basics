<?php

function doubleMe($x) {
    return $x * 2;
}

function tripleMe($x) {
    return $x * 3;
}

$ourCoolNumber = tripleMe(doubleMe(3));

if ($ourCoolNumber > 200) {
    echo 'The number is large enough.';
} else {
    echo 'The number is not large enough.';
}

echo 'Hello there!!!';