<?php
class Retangulo {
    public float $largura;
    public float $altura;

    public function __construct(float $largura, float $altura) {
        $this->largura = $largura;
        $this->altura  = $altura;
    }

    public function area(): float {
        return $this->largura * $this->altura;
    }

    public function perimetro(): float {
        return 2 * ($this->largura + $this->altura);
    }
}


$r = new Retangulo(2, 10);
echo "Área do retângulo: " . $r->area() . PHP_EOL;        
echo "Perímetro do retângulo: " . $r->perimetro() . PHP_EOL;
?>