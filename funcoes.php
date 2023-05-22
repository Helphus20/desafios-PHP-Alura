<?php
require_once "dados.php";
function escreva($mensagem): void
{
    echo $mensagem . PHP_EOL;
}
function validaSaldo($saque, $saldo)
{
    if($saque > $saldo){
        return 1;
    }
}
function saldoInsuficiente($nome, $saldo): void
{
    escreva(mensagem: "$nome não tem saldo suficiente para esta operação, solicitação CANCELADA");
    escreva(mensagem: "Saldo: R$ $saldo");
}
function saque($saldo, $saque, $nome, $numId, $conta): void
{
    $conta = $saldo - $saque;
    escreva(mensagem: "$nome seu cpf é $numId");
    escreva(mensagem: "seu saldo é $conta");
}

function validaDeposito ($deposito)
{
    if($deposito < 0)
        return 1;
}
function deposito($conta, $deposito)
{
    return $conta += $deposito;
}
function mostraSaldo($conta): void
{
    echo "Seu saldo é: R$ $conta" . PHP_EOL;
}
function titularComMaiusculas(&$conta)
{
    $conta = strtoupper($conta);
}