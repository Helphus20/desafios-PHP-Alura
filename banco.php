<?php 
require_once "funcoes.php";
require_once "dados.php";

titularComMaiusculas($contasCorrentes[$numId]['titular']);//transforma o nome para letras maiúsculas no lugar onde está armazenado
escreva(mensagem: "Saldo atual de  {$contasCorrentes[$numId]['titular']}: R$ {$contasCorrentes[$numId]['saldo']}");
escreva(mensagem: "Fazendo um depósito no valor de R$ $deposito");
if(validaDeposito($deposito) == 1)//confere se não é um depósito negativo ou igual a 0
    escreva(mensagem: 'Valor de depósito inválido');
else 
    $contasCorrentes[$numId]['saldo'] = deposito($contasCorrentes[$numId]['saldo'], $deposito);//deposita valor
mostraSaldo($contasCorrentes[$numId]['saldo']);

escreva(mensagem: "{$contasCorrentes[$numId]['titular']} quer fazer um saque no valor de $saque reais" . PHP_EOL);

unset($contasCorrentes['123.455.678-83']);//remove um elemento da lista

if (validaSaldo($saque, $contasCorrentes[$numId]['saldo']) == 1){//confere se é possível realizar o saque com o valor de saldo na conta 
    saldoInsuficiente($contasCorrentes[$numId]['titular'], $contasCorrentes[$numId]['saldo']); //apresenta o erro de saque
}   else{
        saque($contasCorrentes[$numId]['saldo'], $saque, $contasCorrentes[$numId]['titular'], $numId, $contasCorrentes[$numId]['saldo']);
    }

PHP_EOL . PHP_EOL .mostraClientes($contasCorrentes);