<?php

class Carro {
    public $placa;
    public $marca;
    public $ipva;
    public $ano;

    public function __construct($placa, $marca, $ipva, $ano) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->ipva = $ipva;
        $this->ano = $ano;
    }

    public function exibirInformacoes() {
        echo "Placa: " . $this->placa . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "IPVA: R$ " . number_format($this->ipva, 2, ",", ".") . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

$carro = new Carro("ABC1234", "Belina", 500.00, 1972);
$carro->exibirInformacoes();

?>
