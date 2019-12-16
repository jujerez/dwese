<?php


    // Las  clausuras guardan el valor del la variable aunque la llamemos fuera

    function multiplicar($v)
    {
        $f = function ($x) use ($v) {
            return $x * $v;
        }
    }

    $duplicar = multiplicar(2); // devuelve 4
    //$triplicar = multiplicar(3); // devuelve 9

?>