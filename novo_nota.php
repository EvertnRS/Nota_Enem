<?php

$nome = null;
$red = null;
$mat = null;
$port = null;
$nat = null;
$hum = null;
$media = null;

function adicionar(){
    $nome = readline("Nome do aluno: ");
    $red = readline("Nota da redação: ");
    $mat = readline ("Nota de matemática: ");
    $port = readline("Nota de português: ");
    $nat = readline("Nota de ciência naturais: ");
    $hum = readline("Nota de ciências humanas: ");
    $media = (2*$red + 4*$mat + 2*$port + $nat + $hum)/10;
}

function fechar(){
    if ($comando == "fechar"){
        
    }
}

$lista = ["nome" => $nome,
"redacao" => $red,
"matematica" => $mat,
"portugues" => $port,
"natureza" => $nat,
"humanas" => $hum,
"media" => $media
];

$listaAluno = [$lista];

$comando = readline("Escolha se quer *ver* ou *adicionar* uma nota: ");
$comando = strtolower($comando);

if ($comando == "ver"){
    if ($lista == null){
       echo "lista vazia";
    } else if ($lista != null){
       $cont = 0;
       while ($cont < count($listaAluno)){
           print_r($listaAluno[$cont]);
           $cont++;
       }
    }
} else if ($comando == "adicionar"){
    adicionar();
}

