<?php
class Carro {
    public string $marca;
    public string $modelo;
    private int $velocidade = 0; 

    public function __construct(string $marca, string $modelo) {
        $this->marca  = $marca;
        $this->modelo = $modelo;
    }

    public function acelerar(int $incremento = 10): void {
        $this->velocidade += $incremento;
        echo "Acelerando {$incremento} km/h." . PHP_EOL;
    }

    public function frear(int $decremento = 10): void {
        $this->velocidade = max(0, $this->velocidade - $decremento);
        echo "Freando {$decremento} km/h." . PHP_EOL;
    }

    public function exibirVelocidade(): void {
        echo "Velocidade atual: {$this->velocidade} km/h" . PHP_EOL;
    }
}


$carro = new Carro("Chevrolet", "Onix");
$carro->exibirVelocidade(); 
$carro->acelerar(70);
$carro->exibirVelocidade(); 
$carro->frear(16);
$carro->exibirVelocidade();
?>