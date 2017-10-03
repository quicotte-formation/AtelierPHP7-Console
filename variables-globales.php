<?php

define("MA_CONSTANTE", "valeur");

echo MA_CONSTANTE;// =>valeur

function f(){
    echo MA_CONSTANTE;// =>valeur
}

function fStatique(){
    static $a = 1;
    
    echo $a;
    $a++;
}

function define123(){
    
    global $a;
    
    $a = "123";
}

$a = "abc";
define123();
echo "=>" . $a;//=>123

fStatique();
fStatique();

