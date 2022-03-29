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
    $lista = ["nome" => $nome,
    "redacao" => $red,
    "matematica" => $mat,
    "portugues" => $port,
    "natureza" => $nat,
    "humanas" => $hum,
    "media" => $media
    ];

    return $lista;
}



$listaAluno = [];
$comando = null;

while ($comando != "fechar"){
    $comando = readline("Escolha se quer *ver* ou *adicionar* uma nota ou *fechar* o programa: ");
    $comando = strtolower($comando);
    
    if ($comando == "ver"){
        if (count($listaAluno) == 0){
           echo "lista vazia".PHP_EOL;
        } else if (count($listaAluno) != 0){
           $cont = 0;
           while ($cont < count($listaAluno)){
               print_r($listaAluno[$cont]);
               $cont++;
           }
        }
    } else if ($comando == "adicionar"){
        $listaAluno[] = adicionar();

    }
}


