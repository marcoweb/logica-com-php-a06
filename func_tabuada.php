<?php
function tabuada($numero) {
    $result = [];
    for($i = 1;$i <= 10;$i++)
        $result[$i] = $i * $numero;
    return $result;
}