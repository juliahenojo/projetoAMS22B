<?php
$tNumero = intval ($_GET['txtNumero']);
$tDivisor = intval ($_GET['txtDivisor']);
$Divisor1 = $tDivisor;
$cont = 0;
while ($tNumero >= $tDivisor)
{
    $tDivisor = $tDivisor + $Divisor1;
    $cont++;
}
echo $cont;
?>