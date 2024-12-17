<?php
$pessoa=[
 "nome"=>"pedro",
 "notas"=>[
    "matematica"=>8.0,
    "portugues"=>9.5,
    "ciencias"=>10,
 ]
 ];
$media=array_sum($pessoa["notas"])/count($pessoa["notas"]);

echo"nome:".$pessoa["nome"]."";
echo"notas:"."";

?>