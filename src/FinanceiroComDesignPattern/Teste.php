<?php

require_once 'vendor/autoload.php';

use Teste\DesignPattern\FinanceiroComDesignPattern\Caixa;
use Teste\DesignPattern\FinanceiroComDesignPattern\Descontos\Dinheiro;
use Teste\DesignPattern\FinanceiroComDesignPattern\Descontos\Cartao;

$caixa01 = new Caixa;
$saida1 = $caixa01->efetuarPagamento(new Dinheiro);
echo $saida1 . PHP_EOL;


$caixa02 = new Caixa;
$saida2 = $caixa02->efetuarPagamento(new Cartao);
echo $saida2 . PHP_EOL;