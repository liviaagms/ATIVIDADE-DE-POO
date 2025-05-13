<?php
class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome       = $nome;
        $this->preco      = $preco;
        $this->quantidade = $quantidade;
    }

   
    public function valorTotalEmEstoque(): float {
        return $this->preco * $this->quantidade;
    }

    
    public function estaDisponivel(): bool {
        return $this->quantidade > 0;
    }
}


$produto = new Produto("Camiseta", 49.99, 15);
echo "Valor total em estoque: R$ " . number_format($produto->valorTotalEmEstoque(), 2, ',', '.') . PHP_EOL;
echo "Disponível? " . ($produto->estaDisponivel() ? "Sim" : "Não") . PHP_EOL;
?>