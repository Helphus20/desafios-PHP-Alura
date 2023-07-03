<?php 
require_once "funcoes.php";
require_once "dados.php";

titularComMaiusculas($contasCorrentes[$numId]['titular']);
escreva(mensagem: "Saldo atual de  {$contasCorrentes[$numId]['titular']}: R$ {$contasCorrentes[$numId]['saldo']}");
escreva(mensagem: "Fazendo um depósito no valor de R$ $deposito");
if(validaDeposito($deposito) == 1)
    escreva(mensagem: 'Valor de depósito inválido');
else 
    $contasCorrentes[$numId]['saldo'] = deposito($contasCorrentes[$numId]['saldo'], $deposito);
mostraSaldo($contasCorrentes[$numId]['saldo']);

escreva(mensagem: "{$contasCorrentes[$numId]['titular']} quer fazer um saque no valor de $saque reais" . PHP_EOL);

unset($contasCorrentes['123.455.678-83']);//remove um elemento da lista

if (validaSaldo($saque, $contasCorrentes[$numId]['saldo']) == 1){
    saldoInsuficiente($contasCorrentes[$numId]['titular'], $contasCorrentes[$numId]['saldo']);
}   else{
        saque($contasCorrentes[$numId]['saldo'], $saque, $contasCorrentes[$numId]['titular'], $numId, $contasCorrentes[$numId]['saldo']);
    }

PHP_EOL . PHP_EOL .mostraClientes($contasCorrentes);