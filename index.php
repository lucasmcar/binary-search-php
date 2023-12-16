<?php

require __DIR__.'/vendor/autoload.php';

use Code\Ordenador\Buscador;
use Code\Ordenador\Ordenador;

$ord = new Ordenador();

$ord->setLista([2,4,8,1,5,0,10,69,24]);

//Ordena lista
print_r($ord->ordenaLista());

//Retorna lista não ordenada
print_r($ord->getListaNaoOrdenada());

//Retorna lista ordenada
print_r($ord->getListaOrdenada());

$bsc = new Buscador($ord);

print_r($bsc->searchElement(8 , $ord->getListaOrdenada()));

