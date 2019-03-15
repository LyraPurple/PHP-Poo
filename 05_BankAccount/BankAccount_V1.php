<?php
class BankAccount
{
    private $identifiant;
    private $propriétaire;
    private $balance;

    // Renvoie la valeur de balance (L'argent courant sur le compte en banque)
    public function getBalance()
    {
        return $this->balance;
    }
    // Additionne l'argent de le compte avec la somme qu'on ajoute
    public function depositMoney($argent_depose)
    {
        $this->balance += $argent_depose;
        return 'Matthieu a ' . $this->balance . ' sur son compte';
    }
    // Retire de l'argent de le compte la somme qu'on enlève
    public function withdrawMoney($argent_retire)
    {
        $this->balance -= $argent_retire;
        return 'Matthieu a ' . $this->balance . ' sur son compte';
    }
}