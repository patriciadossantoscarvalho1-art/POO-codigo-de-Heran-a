<?php

require_once 'Veiculo.php';

class Moto extends Veiculo {
    private int $cilindradas;

    public function __construct(string $marca, string $modelo, int $ano, int $cilindradas) {
        // Envia as características comuns para o construtor da classe Pai (Veiculo)
        parent::__construct($marca, $modelo, $ano);
        
        // Define o atributo exclusivo
        $this->cilindradas = $cilindradas;
    }

    // Sobrescrita (Override) do método exibirDados
    public function exibirDados(): void {
        parent::exibirDados(); // Reaproveita o comportamento da classe pai
        echo " | Cilindradas: {$this->cilindradas}cc" . PHP_EOL;
    }
}
?>