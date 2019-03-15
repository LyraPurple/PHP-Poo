<?php

class BankAccount
{
    protected $identifiant;
    protected $propriétaire;
    protected $balance = 0;

    public function __construct($identifiant_param, $propriétaire_param)
    {
        $this->identifiant = $identifiant_param;
        $this->propriétaire = $propriétaire_param;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function depositMoney($argent_depose)
    {
        if ($argent_depose < 0) {
            echo 'Pas de dépôt négatif';
            return;
        }

        $this->balance += $argent_depose;
    }

    /**
     * Return a boolean with withdraw state.
     * 
     * @param int $argent_retire
     * 
     * @return bool
     */
    public function withdrawMoney($argent_retire)
    {
        if ($this->balance < $argent_retire) {
            echo 'Pas de retrait';
            return false; // Le return arrête la fonction
        }

        $this->balance -= $argent_retire;
        return true;
    }

    public function wire($argent_deplace_de_compte, BankAccount $compte_benef_cible)
    {
        // if ($compte_benef_cible instanceof BankAccount) {
            if ($this->withdrawMoney($argent_deplace_de_compte)) {
                $compte_benef_cible->depositMoney($argent_deplace_de_compte);
            }
        // }
    }
}
