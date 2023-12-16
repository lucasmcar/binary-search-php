<?php

namespace Code\Ordenador;

use Exception;

class Ordenador
{
    private $lista;
	private $listaOrdenada;

    public function __construct()
    {
        $this->lista = [];
		$this->listaOrdenada = [];
    }

    public function setLista(array $lista) : void
    {
		if(!is_array($lista)){
			throw new Exception("O parâmetro da deve ser uma lista de valores");
		}
        $this->lista = $lista;
    }

    public function getListaNaoOrdenada() : array
    {
        return $this->lista;
    }

	public function ordenaLista() : array
	{
		$list = $this->getListaNaoOrdenada();

		$len = count($list);
		$aux = null;
		$sorted = [];


		for ($i = 0; $i < $len - 1; $i++) {
			for ($j = 0; $j < $len - $i - 1; $j++) {
				if ($list[$j] > $list[$j + 1]) {
					// Troca os elementos se estiverem na ordem errada
					$aux = $list[$j];
					$list[$j] = $list[$j + 1];
					$list[$j + 1] = $aux;
				}
			}
		}


		$this->listaOrdenada = $list;
		return $this->listaOrdenada;




		/*for($i = 0; $i < $len; $i++){
			if($i < count($list) - 1){
				$k = $i + 1;
			}
			for($j = 0; $j < count($list); $j++){
				if($list[$j] > $list[$k]){
					$aux = $list[$j];
					$list[$j] = $list[$k];
					$list[$k] = $aux; 
				}
			}

			for($i = 0; $i < count($list); $i++){
				$sorted[] = $list[$i];
			}
			return $sorted;
		}*/
	}

	public function getListaOrdenada()
	{
		return $this->listaOrdenada;
	}
}

