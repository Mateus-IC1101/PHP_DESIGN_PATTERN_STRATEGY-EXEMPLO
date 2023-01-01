<?php

namespace Teste\DesignPattern\FinanceiroComDesignPattern\Descontos;

use Teste\DesignPattern\FinanceiroComDesignPattern\Descontos\InterfaceDesconto;

class Cartao implements InterfaceDesconto
{
    public function calcularDesconto(): string
    {
        return 'Pagamento em cartão | desconto de 5%';
    }
}