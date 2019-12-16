<?php

    function factorial($n) 
    {
        array_reduce(range(1,$n), function($a,$b)  { return $a*$b},1);
    }
?>