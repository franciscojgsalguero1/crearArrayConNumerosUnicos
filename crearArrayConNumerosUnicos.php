<?php
    function array_aleatorio_ordenado($n=50) {
        
        $max_limit = $n*2;
        $numbers = range(0, $max_limit-1);
        $rands = array();
        for ($i=0; $i < $n; $i++) {
          $ok = false;
          while (!$ok) {
            $x = array_rand($numbers);
            $ok = !in_array($numbers[$x], $rands) && $numbers[$x] != $i;
          }
          $rands[$i] = $numbers[$x];
          unset($numbers[$x]);
        }
        // ordenamos el array
        sort($rands);
        // mostramos el array
        var_dump($rands);
    }
    
    array_aleatorio_ordenado();

?>