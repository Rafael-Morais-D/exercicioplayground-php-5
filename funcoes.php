<?php

/*
$nome = "Rafael";

function quemE($nome){
    echo $nome;
}

quemE($nome);
*/

function quemE(){
    $nome = "Rafael";
    return $nome;
}

$nome = quemE();

echo $nome;

?>