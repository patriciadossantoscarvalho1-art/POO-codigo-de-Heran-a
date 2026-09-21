<?php

class Veiculo {
    protected string $marca;
    protected string $modelo;
    protected int $ano;

    public function __construct(string $marca, string $modelo, int $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDados(): void {
        echo "Marca: {$this->marca} | Modelo: {$this->modelo} | Ano: {$this->ano}";
    }
}
?>