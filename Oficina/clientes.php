<?php

class Usuario {
    public $nome;
    public $idade;
    public $altura;
    public $cpf;
    public $obito;

    public function __construct($nome, $idade, $altura, $cpf, $obito) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->cpf = $cpf;
        $this->obito = $obito;
    }

    public function exibir() {
        echo "<h2>Usuário</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Altura: " . $this->altura . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Óbito: " . $this->obito . "<br>";
    }
}

$user1 = new Usuario("João da Silva", 30, 1.80, "123.456.789-00", "12/03/2020");
$user2 = new Usuario("Maria Oliveira", 25, 1.65, "987.654.321-00", "10/05/2020");

$user1->exibir();
$user2->exibir();

?>