<?php

use Code\Ordenador\Buscador;
use Code\Ordenador\Ordenador;
use PHPUnit\Framework\TestCase;

class BuscadorTest extends TestCase
{
    public function testVerifyIfMethodNotExists()
    {
        $ord = new Ordenador();
        $ord->setLista([1,2,3]);
        $bsc = new Buscador($ord);

        $this->assertNotInstanceOf(Buscador::class, $bsc->find());
    }

    public function testVerifyIfMethodExists()
    {
        $ord = new Ordenador();
        $ord->setLista([1,2,3]);
        $bsc = new Buscador($ord);

        $this->assertNotInstanceOf(Buscador::class, $bsc->searchElement(4, $ord->getListaNaoOrdenada()));
    }

    public function testVerifyIfValueNotExists()
    {
        $ord = new Ordenador();
        $ord->setLista([1,2,45,6]);
        $this->assertContains(45, $ord->getListaNaoOrdenada());

    }

    public function testVerifyIfValueExists()
    {
        $ord = new Ordenador();
        $ord->setLista([1,2,45,6]);
        $this->assertContains(6, $ord->getListaNaoOrdenada());

    }

    public function testVerifySearchValue()
    {
        $ord = new Ordenador();
        $ord->setLista([2,8,9,5,52]);
        $array = $ord->ordenaLista();
        $bsc = new Buscador($ord);
        $array1 = $bsc->searchElement(5, $array);

        $this->assertIsArray($array1);
    }
}