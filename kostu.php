<?php

function kostu()
{
    $chislo1 = rand(1,6);
    $chislo2 = rand(1,6);

    $summa = $chislo1+$chislo2;

    echo "<img src=\"img/ris".$chislo1.".gif\">";
    echo "<img src=\"img/ris".$chislo2.".gif\"><br>";
    echo "Вам нужно совершить ".$summa." ходов.";
}