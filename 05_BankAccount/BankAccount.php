<?php
class BankAccount
{
    private $identifiant;
    private $propriétaire;
    protected $balance;

/*     Quand on créé la classe on donne un noméro de compte,
    et le nom du propriétaire de le compte,
    donc pour instancier la classe on a besoing de les deux
    valeurs, donc on les demande au moment du construct de la classe: */
    public function __construct($identifiant_param, $propriétaire_param)
    {
        $this->identifiant = $identifiant_param;
        $this->propriétaire = $propriétaire_param;
    }

    // Renvoie la valeur de balance (L'argent courant sur le compte en banque)
    public function getBalance()
    {
        return $this->balance;
    }
    // Additionne l'argent de le compte avec la somme qu'on ajoute
    public function depositMoney($argent_depose)
    {
        // Si on dépose un chiffre négatif, ça nous affiche une erreure.
        if ($argent_depose < 0) {
            echo    'C\'est mieux de déposay une somme positive <br/>
                    Autrement, veuillez choisir de retirer.';        
        } else {
        // Fin de les conditions
        $this->balance += $argent_depose;
        return 'Matthieu a ' . $this->balance . ' sur son compte';
        }
    }
    // Retire de l'argent de le compte la somme qu'on enlève
    public function withdrawMoney($argent_retire)
    {
        // Si $this->balance -= $argent_retire < 0 , ça nous affiche une erreure.
        if ( $this->balance -= $argent_retire < 0) { 
            echo   'C\'est mieux de retirer quand on a de les sous.';        
        } else {
        // Fin de les conditions;
        'Matthieu a ' . $this->balance . ' sur son compte';
        }
    }



    // Virer de l'argent sur un autre compte:
    public function wire($argent_a_virer, /* autre instance de classe */)
    {
        // Si on dépose un chiffre négatif, ça nous affiche une erreure.
        if ($argent_a_virer < 0) {
            echo    'C\'est mieux de viray une somme positive <br/>
                    Autrement, veuillez choisir de retiray.';        
        } else {
        // Fin de les conditions

        // On prend de ce compte là, et on enlève ...
        $this->balance -= $argent_a_virer;
        // ... pour ajouter à un autre compte

            /* Yé né say pas faaaaaaaaaaaaire 
            Où ay l'autre compte, comment lui parlay ?*/

        return 'Matthieu a ' . $this->balance . ' sur son compte';
        }
    }
}