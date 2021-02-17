<?php

$arg1 = (int) 5;
$arg2 = (int) 2;
$arg3 = (string) '*';

function validarZero($p1,$p2,$p3){
    if($p2!==0 && $p3!=="*"){
        return $p1 / $p2;
    }else if($p2!==0 && $p3!=="/"){
        return $p1 * $p2;
    }else{
        return <<<FIN
    Porfavor ingrese un numero mayor a 0
FIN;
    }
}
function calculadora($p1,$p2,$p3){
    if($p3=="+"){
        return $p1 + $p2;
    }else if($p3=="-"){
        return $p1 - $p2;
    }else if($p3=="*"){
        return validarZero($p1,$p2,$p3);
    }else if($p3=="/"){
        return validarZero($p1,$p2,$p3);
    }else{
        return <<<FIN
        La opcion enviada no se encuentra disponible
FIN;
    }
    
}

$res = (array) calculadora($arg1,$arg2,$arg3);
print_r($res[0]);





    $edad = (int) 18;

    if($edad==18){
        $mensaje = (string) <<<FIN
        Muestrame la cedula
FIN;
        print_r($mensaje);
    }else if($edad>18){
        $mensaje = (string) <<<FIN
        Puedes pasar al antro
FIN;
        print_r($mensaje);
    }else if($edad>=10 && $edad<=17 ){
        $mensaje = (string) <<<FIN
        Eres menor de edad ve a estudiar algo
        no andes de vago
FIN;
        print_r($mensaje);
    }else if($edad<=9 && $edad>=1){
        $mensaje = (string) <<<FIN
        Que haces a esta hora de la noche
        voy a llamar al ICBF
FIN;
        print_r($mensaje);
    }else{
        $mensaje = (string) <<<FIN
        BUUUU!
FIN;
        print_r($mensaje);
    }
  




    // $a = (bool) false;
    // $b = (bool) true;

    //Operador logico Y ( and, &&)
    // var_dump($a and $b);
    // var_dump($a && $b);

    //Operador logico O ( or, ||)
    // var_dump($a or $b);
    // var_dump($a || $b);

    //Operador logico XOR (!)
    // var_dump(!$a);

    // Ejemplo
    // var_dump(  !(  !(true) && (false) ) || !( !( !(true) &&  (false && true) ) ) );




?>
