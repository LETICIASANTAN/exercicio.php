<?php

$cidades = ["Balsas","caxias","imperatriz","são luis","itapecuru-mirim"];
$invertedArray = array_reverse($cidades);
$invertedArrrayPreservedKeys = array_reverse($cidades,true);


echo '';
// array invertido
print_r($invertedArray);




?>