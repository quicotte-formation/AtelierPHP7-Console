<?php

$a=array();
[1,2,3,4,4,5];

$b=[3,4,4,5,6,7,7];

printf("[%s] INTERSECT [%s] = [%s]\n", 
        implode(",", $a), 
        implode(",", $b),
        implode( ",", array_intersect($a, $b) ));

printf("[%s] MERGE [%s] = [%s]\n", 
        implode(",", $a), 
        implode(",", $b),
        implode( ",", array_merge($a, $b) ));

printf("[%s] DIFF [%s] = [%s]\n", 
        implode(",", $a), 
        implode(",", $b),
        implode( ",", array_diff($a, $b) ));

$tab=[10,"50",3,2,"1000"];
sort($tab);
shuffle($tab);
echo implode(",", $tab);