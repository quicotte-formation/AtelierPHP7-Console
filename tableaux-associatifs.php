<?php

$tab = [    "Jamaïque"=>"Kingston",
            "Cuba"=>"La Havanne",
            "Madagascar"=>"Antananarivo"];

printf("Capitale de la Jamaïque: %s\n", $tab["Jamaïque"] );

$pays = array_keys($tab);
sort($pays);
printf("Liste des pays: %s\n", implode(", ", $pays) );

$capitales = array_values($tab);
sort($capitales);
$capitales = array_reverse($capitales);
printf("Liste des capitales: %s\n", implode(", ", $capitales) );