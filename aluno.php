<?php
class Aluno
{
    public string $nome;
    public string $matricula;
    /** @var float[] */
    public array $notas;

    public function __construct(string $nome, string $matricula, array $notas)
    {
        $this->nome      = $nome;
        $this->matricula = $matricula;
        $this->notas     = $notas;
    }

    public function calcularMedia(): float
    {
        if (count($this->notas) === 0) {
            return 0.0; 
        }
        return array_sum($this->notas) / count($this->notas);
    }

    public function verificarSituacao(): string
    {
        $media = $this->calcularMedia();
        return $media >= 60 ? 'Aprovado' : 'Reprovado';
    }
}


$aluno = new Aluno("Anna Lívia", "20231GBI23I0029", [70, 85, 90]);
echo "Aluno: {$aluno->nome} ({$aluno->matricula})" . PHP_EOL;
echo "Média: " . $aluno->calcularMedia() . PHP_EOL;
echo "Situação: " . $aluno->verificarSituacao() . PHP_EOL;
?>