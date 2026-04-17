<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    //getter
    public function getVelocidade(){
        return $this->velocidade;
    }

    // setter
    public function setVelocidade($novaVelocidade){

        if($novaVelocidade >= 0 && $novaVelocidade <= 200){
            $this->velocidade= $novaVelocidade;
            echo"Você está dentro da velocidade";
        }
        else{
            echo"Está acima da velocidade permitida<br>";
        }
    }
}

// class CarroCorrida extends Carro{

// } desisti :(

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->setVelocidade(5000)  ; // Velocidade de foguete?
$meuCarro->getVelocidade(-60);   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>