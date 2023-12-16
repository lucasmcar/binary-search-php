<?php

use Code\Ordenador\Ordenador;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Ordenador::class)]
#[UsesClass(Ordenador::class)]
class OrdenadorTest extends TestCase
{
    public function testVerifyIfParamIsArray()
    {
        $ord = new Ordenador();

        $ord->setLista([]);

        $this->assertIsArray($ord->getListaNaoOrdenada());

    }

    public function testVerifyIfArrayIsOrdered()
    {
        $ord = new Ordenador();

        $ord->setLista([2,6,4,8,25,12]);

        sort($ord->getListaNaoOrdenada());

        
    }

    
}