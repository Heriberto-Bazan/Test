<?php

class Faker {

    function letterify($cadena){
        $resultado = str_replace("?", "N", $cadena);
        return $resultado;
    }

    function numerify($cadena){
        $resultado = str_replace("#", "8", $cadena);
        return $resultado;
    }

    function bothify($cadena){
        $resultado = str_replace("?", "M", $cadena);
        $resultado_cadena = str_replace("#", "7", $resultado);
        return $resultado_cadena;
    }

    function nuevaCadena($entrada, $longitud = 18) {
        $datos_longitud = strlen($entrada);
        $cadena_aleatoria = '';
        for($i = 0; $i < $longitud; $i++) {
            $datos = $entrada[mt_rand(0, $datos_longitud - 1)];
            $cadena_aleatoria .= $datos;
        }
        return $cadena_aleatoria;
    }


}
