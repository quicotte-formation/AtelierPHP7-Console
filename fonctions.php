<?php

/**
 * Calcule la factorielle du paramètre $n.
 * @param int $n Le nombre dont on calcule la factorielle. 
 * @return int La facotielle.
 */
function factorielle(int $n):int{
    
    if( $n<=0 )
        return 1;
    
   return $n * factorielle($n-1); 
}

function multiplieElemsTabPar2PassageParVal(array $tab){
    
    for($i=0;$i<count($tab);$i++){
        $tab[$i] = $tab[$i] * 2;
    }
}

function multiplieElemsTabPar2PassageParRef(array &$tab){
    
    for($i=0;$i<count($tab);$i++){
        $tab[$i] = $tab[$i] * 2;
    }
}

function sommeNonTypee($a, $b){
    
    return "coucou: " . strval( $a+$b );
}

function sommeTypee(int $a, int $b):string{
    
    return "coucou: " . strval( $a+$b );
}

$tab = [1,2,3,4,5];
multiplieElemsTabPar2PassageParVal($tab);
printf("%s\n", implode(",", $tab));
multiplieElemsTabPar2PassageParRef($tab);
printf("%s\n", implode(",", $tab));
printf("Factorielle de %d = %d\n", 20, factorielle(20));