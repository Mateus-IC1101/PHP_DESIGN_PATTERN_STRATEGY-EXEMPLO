<?php

namespace Teste\DesignPattern\FinanceiroComDesignPattern;

use Teste\DesignPattern\FinanceiroComDesignPattern\Descontos\InterfaceDesconto;

class Caixa
{
    public static function efetuarPagamento(InterfaceDesconto $tipo)
    {
        return $tipo->calcularDesconto();
    }
}