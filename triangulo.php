<?php
class Triangulo {
    private float $l1;
    private float $l2;
    private float $l3;

    public function __construct(float $l1, float $l2, float $l3) {
        $this->l1 = $l1;
        $this->l2 = $l2;
        $this->l3 = $l3;
    }

    
    public function isValido(): bool {
        return (
            $this->l1 + $this->l2 > $this->l3 &&
            $this->l1 + $this->l3 > $this->l2 &&
            $this->l2 + $this->l3 > $this->l1
        );
    }

   
    public function area(): ?float {
        if (!$this->isValido()) {
            return null;
        }
        $s = ($this->l1 + $this->l2 + $this->l3) / 2;
        return sqrt($s * ($s - $this->l1) * ($s - $this->l2) * ($s - $this->l3));
    }
}


$t = new Triangulo(3, 4, 5);
if ($t->isValido()) {
    echo "Triângulo válido. Área = " . $t->area() . PHP_EOL; 
} else {
    echo "Triângulo inválido." . PHP_EOL;
}
?>