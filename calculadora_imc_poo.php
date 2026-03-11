<?php

class pessoa
{
    public $peso;
    public $altura;
    public $nome;
    public $imc;

    function __construct($nome, $peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->nome=$nome;
        $this->imc = $this-> calcularIMC();
    }

    function calcularIMC() {
        return number_format($this->peso/($this->altura*$this->altura), 2, ',','.');
    }

}
$carol = new pessoa('Carollayne', 63, 1.61);

echo "$carol->nome seu IMC é $carol->imc";