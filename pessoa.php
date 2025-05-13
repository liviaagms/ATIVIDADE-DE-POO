<?php
class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(): void {
        echo "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos." . PHP_EOL;
    }
}


$p1 = new Pessoa("Anna Lívia", 18);
$p2 = new Pessoa("Delson", 19);

$p1->apresentar(); 
$p2->apresentar(); 
?>

 

