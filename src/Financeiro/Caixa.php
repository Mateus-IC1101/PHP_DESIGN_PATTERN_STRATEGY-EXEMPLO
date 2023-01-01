<?php

namespace Teste\DesignPattern;

class Caixa
{
    public static function efetuarPagamento($tipo)
    {
        switch ($tipo) {
            case 'dinheiro':
                return 'Pagamento em dinheiro efetuado | desconto de 10%';

            case 'cartao':
                return 'Pagamento em cartão | desconto de 5%';
        }
    }
}

$pagamento = Caixa::efetuarPagamento('cartao');
print($pagamento);