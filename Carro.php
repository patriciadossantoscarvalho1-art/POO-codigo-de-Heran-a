<?php

require_once 'Veiculo.php';

class Carro extends Veiculo {
    private int $qtdPortas;

    public function __construct(string $marca, string $modelo, int $ano, int $qtdPortas) {
        // Envia as características comuns para o construtor da classe Pai (Veiculo)
        parent::__construct($marca, $modelo, $ano);
        
        // Define o atributo exclusivo
        $this->qtdPortas = $qtdPortas;
    }

    // Sobrescrita (Override) do método exibirDados
    public function exibirDados(): void {
        parent::exibirDados(); // Reaproveita o comportamento da classe pai
        echo " | Portas: {$this->qtdPortas}" . PHP_EOL;
    }
}
?>