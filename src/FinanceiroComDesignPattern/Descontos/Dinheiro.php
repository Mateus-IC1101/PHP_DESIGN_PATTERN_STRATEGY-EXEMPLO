<?php

namespace Teste\DesignPattern\FinanceiroComDesignPattern\Descontos;

use Teste\DesignPattern\FinanceiroComDesignPattern\Descontos\InterfaceDesconto;

class Dinheiro implements InterfaceDesconto
{
    public function calcularDesconto(): string
    {
        return 'Pagamento em dinheiro | desconto de 10%';
    }
}