<?php


class Numeros{

    function MayorDosNumeros($n1,$n2){
        if($n1>$n2)
            return $n1;
        else
            return $n2;
    }

    function MenorDosNumeros($n1,$n2){
        if($n1<$n2)
            return $n1;
        else
            return $n2;
    }
    
    function Factorial($num){-
        $factor = 1;
        $contador = 1;
        while ($contador <= $num){
            $factor*=$contador;
            $contador++;
        }
        return $factor;
    }

    function Primo($num) {
        for ($i = 1; $i <= ($num/2); $i++) {
            if ($num % $i == 0) {
                return true;
            }else{
                return false;  
            }
        }
    }
}


