<?php

require_once 'Carro.php';
require_once 'Moto.php';

// Instanciando um Carro
$meuCarro = new Carro("Toyota", "Corolla", 2024, 4);

// Instanciando uma Moto
$minhaMoto = new Moto("Honda", "CB 500F", 2023, 500);

// Testando a exibição dos dados (métodos sobrescritos)
$meuCarro->exibirDados();
$minhaMoto->exibirDados();
?>