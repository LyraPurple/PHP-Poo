<?php

/* SavingAccount est un livray
et il hérite de BankAccount 
qui est un compte */

class SavingAccount extends BankAccount
{
    public function applyInterest()
    {
        // Montant livret + (Montant livray * 0.75)
        return $this->balance +=  $this->balance + ($this->balance * 0.75);
    }
}