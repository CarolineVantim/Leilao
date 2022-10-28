<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'Vendor/autoload.php';

$leilao = new Leilao(descricao: 'PC Gamer');

$maria = new Usuario(nome: 'Maria');
$joao = new Usuario(nome: 'João');

$leilao->recebeLance(new Lance($joao, valor: 3000));
$leilao->recebeLance(new Lance($maria, valor:20000));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

if ($maiorValor == 20000){
    echo "TESTE OK";
} else{
    echo "TESTE FALHOU";
}
