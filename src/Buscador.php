<?php

namespace Code\Ordenador;

use Code\Ordenador\Ordenador;

class Buscador
{

    private $list;
    private $listaOrd;

    public function __construct(Ordenador $obj)
    {
        $this->list = $obj->getListaNaoOrdenada();
        $this->listaOrd = $obj->ordenaLista();
    }

    public function searchElement($elementToFind, array $orderedList)
    {
        $left = 0;
        $right = count($orderedList) - 1;
        $middle = null;
        $el = $elementToFind;
        
        $positions = null;

        while($left < $right){
            $middle = floor(($left + $right)/2);

            if($orderedList[$middle] === $el){
                $positions = $middle;
            }

            if($orderedList[$middle] < $el){
                $left = $middle + 1;
                $positions = $left;
                
            } else {
                $right = $middle - 1;
                $positions = $right;
            }
        }

        return array('value' => $elementToFind, 'position' => $positions);
       
    }

    public function find()
    {
        return "Eu existo";
    }
}