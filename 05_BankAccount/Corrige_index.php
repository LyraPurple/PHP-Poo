<?php

require_once 'BankAccount.php';
require_once 'SavingAccount.php';

$compte_intance_BA = new BankAccount(1, 'Matthieu');

echo 'Matthieu a ' . $compte_intance_BA->getBalance() . ' euros. <br />';
$compte_intance_BA->depositMoney(5000);
echo 'Matthieu a ' . $compte_intance_BA->getBalance() . ' euros. <br />';
$compte_intance_BA->withdrawMoney(1000);
echo 'Matthieu a ' . $compte_intance_BA->getBalance() . ' euros. <br />';

var_dump($compte_intance_BA);

$livret = new SavingAccount(2, 'Matthieu');
$livret->depositMoney(1000000);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
echo $livret->getBalance();

$compte_intance_BA->wire(2000000, $livret);

var_dump($livret);
