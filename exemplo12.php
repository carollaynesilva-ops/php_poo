<?php
class Conta{

    //ATRIBUTOS - PROPRIEDADES - CAMPOS
    public $numero;
    public $saldo;

    //MÉTODO CONSTRUTOR
    function __construct($numero, $saldo)
    {
        //PEGA VARIÁVEIS DA CLASSE, !!LEMBRANDO QUE TEM QUE ADICIONAR ELA DO PARÂMETRO!!!
        $this->numero = $numero;
        $this->saldo=$saldo;

    }

    //MÉTODOS
    function creditar($valor){
        $this->saldo = $this->saldo+ $valor;
    }

    function debitar($valor) {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor){
        if($this->saldo > $valor){
            $this->debitar($valor);

            $outraConta->creditar($valor);
        }
    }
}

//É UMA SUBCLASSE
class Poupanca extends Conta{
    public $juros = 0.05;


    function atualizarJuros(){
        $this->saldo = $this->saldo*(1+$this->juros);
    }
}

$conta= new Conta(1,150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta $conta->numero: $conta->saldo <br>";

$poupanca= new Poupanca(2,150);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da conta $poupanca->numero: $poupanca->saldo <br>"

?>