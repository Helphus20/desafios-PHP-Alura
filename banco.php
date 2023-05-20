<?php 

require 'funcoes.php';
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Felipe', 
        'saldo' => 1000, 
    ],
    '123.345.678-15' => [
        'titular' => 'Jeniffer',
        'saldo' => 10000
    ],
    '123.455.678-83' => [
        'titular' => 'Jotinha',
        'saldo' => 320
    ]
];

$numId = '123.345.678-15';
$saque = 500;
$deposito = 198;

escreva(mensagem: "Saldo atual de  {$contasCorrentes[$numId]['titular']}: R$ {$contasCorrentes[$numId]['saldo']}");
escreva(mensagem: "Fazendo um depósito no valor de R$ $deposito");
if(validaDeposito($deposito) == 1)
    escreva(mensagem: 'Valor de depósito inválido');
else 
    $contasCorrentes[$numId]['saldo'] = deposito($contasCorrentes[$numId]['saldo'], $deposito);
mostraSaldo($contasCorrentes[$numId]['saldo']);


escreva(mensagem: "{$contasCorrentes[$numId]['titular']} quer fazer um saque no valor de $saque reais" . PHP_EOL);

if (validaSaldo($saque, $contasCorrentes[$numId]['saldo']) == 1){
    saldoInsuficiente($contasCorrentes[$numId]['titular'], $contasCorrentes[$numId]['saldo']);
}   else{
        saque($contasCorrentes[$numId]['saldo'], $saque, $contasCorrentes[$numId]['titular'], $numId, $contasCorrentes[$numId]['saldo']);
    }
