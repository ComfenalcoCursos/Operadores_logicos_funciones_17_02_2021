


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

    




















// $edad = (int) 18;

// if($edad==18){
//     $mensaje = (string) <<<FIN
//     Muestrame la cedula
// FIN;
//     print_r($mensaje);
// }else ifad>18){
//     $mensaje = (string) <<<FIN
//     Puedes pasar al antro
// FIN;
//     print_r($mensaje);
// }else if($edad>=10 && $edad<=17 ){
//     $mensaje = (string) <<<FIN
//     Eres menor de edad ve a estudiar algo
//     no andes de vago
// FIN;
//     print_r($mensaje);
// }else if($edad<=9 && $edad>=1){
//     $mensaje = (string) <<<FIN
//     Que haces a esta hora de la noche
//     voy a llamar al ICBF
// FIN;
//     print_r($mensaje);
// }else{
//     $mensaje = (string) <<<FIN
//     BUUUU!
// FIN;
//     print_r($mensaje);
// }





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



















<?php
    //Operadores Logicos (Comparadores De Resultados)
    //Operador Logico AND o && (Y) Si las dos variables son "True", el resultado es True
    $a = (bool) false;
    $b = (bool) false;

    print_r ($a and $b);   //Resultado False
    echo "<br>";

    $a = (bool) false;
    $b = (bool) true;

    print_r ($a and $b);   //Resultado False
    echo "<br>";

    $a = (bool) True;
    $b = (bool) true;

    print_r ($a && $b);    //Resultado True
    echo "<br>";


    //Operador Logico OR o || (O) Si alguna de las variables es "True", El resultado sera True
    $a = (bool) false;
    $b = (bool) false;

    print_r ($a or $b);    //Resultado False

    $a = (bool) True;
    $b = (bool) false;

    print_r ($a or $b);    //Resultado True

    $a = (bool) True;
    $b = (bool) True;

    print_r ($a || $b);    //Resultado True


    //Operador Logico  XOR (XOR) Intercambia el resultado de las variables
    $a = (bool) false;
    $b = (bool) True;

    print_r (!$a) ;    //Resultado True
    print_r (!$b) ;    //Resultado False

    //EJERCICIO 1
    var_dump(!( (8>=40)  &&  !(true) ) ||  !( !(85!=='9')  && (78==78) ));
             !  (False   &&  True )    ||  !(   false      &&    TRUE);
                         True          ||                False;
                                      True;


    //EJERCICIO 2
    var_dump(  !(  !(true) && (false) )  || !( !( !(true) &&  (false && true) ) ) );
            (  !(  !(     false       )) || !( !( (false) &&  (    false   ) ) ) );                                
            (          false          )  || !(    false    );
                              (false     ||      true);
                                      (true);


    //SETENCIA IF
    

?>