<?php
function testXdebug()
{
    $a = 5;
    $b = 10;
    $c = $a + $b;
    return $c;
}

$result = testXdebug();
echo "Resultado: " . $result;
