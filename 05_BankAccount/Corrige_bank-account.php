<?php

/**
 * Nous allons créer un système de gestion de compte en banque en POO.
 *
 * Nous aurons tout d'abord le compte en banque classique représentée par la classe BankAccount.
 * Il possédera un identifiant (int), un propriétaire (string) et une balance (float).
 * On devra définir l'identifiant et le propriétaire dans le constructeur. La balance pourra également
 * être définie dans le constructeur mais de manière optionnelle.
 */

$bankAccount_instance_01 = new BankAccount(123456, 'Matthieu'); // Matthieu a 0 sur son compte
echo $bankAccount_instance_01->getBalance(); // Renvoie 0
$bankAccount_instance_01->depositMoney(1000); // Matthieu a 1000 sur son compte
echo $bankAccount_instance_01->getBalance(); // Renvoie 1000
$bankAccount_instance_01->withdrawMoney(1000); // Matthieu a 0 sur son compte

// On renvoie une erreur le montant du compte tombe en dessous de 0
$bankAccount_instance_01->withdrawMoney(1000); 
$bankAccount_instance_01->depositMoney(-2000);

/**
 * On va ajouter un système de livret qui va hériter d'un compte en banque standard.
 */
$savingAccount01 = new SavingAccount(123457, 'Matthieu');
$savingAccount01->depositMoney(1000); // Matthieu a 1000 sur son livret
$savingAccount01->applyInterest(0.75); // Augmente le montant du livret avec un intérêt de 0,75%
$savingAccount01->withdrawMoney(1000); // Matthieu a 0 sur son livret
echo $savingAccount01->getBalance(); // Renvoie 7,5

/**
 * On pourra également ajouter la possibilité pour les comptes et livrets de virer de l'argent
 * sur un autre compte / livret.
 */
$bankAccount_instance_01->depositMoney(2000);
$bankAccount_instance_01->wire(1000, $savingAccount01);
// On vire 1000 de $bankAccount_instance_01 à $savingAccount01
// On vérifiera que le second argument est bien un compte en banque
