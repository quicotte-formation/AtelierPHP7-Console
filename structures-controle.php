<?php

// Exemple de if
$a = 1;
$b = 1;
if( $a>$b ){
    echo "$a > $b";
} elseif( $a<$b ){
    echo "$a < $b";
} else{
    echo "$a == $b";
}
echo "\n";

// Switch
$pays = "jamaïque";
switch( $pays ){
    case "cuba":
        echo "La Havane";
        break;
    case "jamaïque":
        echo "kingston";
        break;
    default:
        echo "antananarivo";
        break;
}
echo "\n";

// for traditionnel
$tab = [];// ou array()
for($i=0;$i<10;$i++){
    $tab[] = $i * 10;
}
printf("Tab: %s\n", implode(",", $tab));

// for ***américain*** ; )
foreach ($tab as $valAct) {
    printf("%s,", $valAct);
}
echo "\n";

// While (précondition)
$a=0;
while($a<10){
    $a++;
}

// Do while (postcondition)
$a=0;
do{
    $a++;
}while($a<10);