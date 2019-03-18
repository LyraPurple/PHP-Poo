<!DOCTYPE html>
<html lang="fr">

<!--    -------Adresse de le site -------
        http://localhost/php_poo/07_Formulaire/
        -------Adresse de le site -------  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire en POO</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


    <div class="container">
        <?php
            require_once 'Form.php';
            /* On include le Form.php, la classe qui représente 
            *un formulaire pour un site web.
            *
            *Pour s'occuper des champs du formulaire on a le tableau $fields. 
            *Donc on en revient à l'index.php et on créé notre formulaire,
            *$form = new Form();
            *Du coup dans le fichier Form.php, on utilise la méthode magique 
            *http://php.net/manual/fr/language.oop5.php
            *http://php.net/manual/fr/language.oop5.magic.php
            *"La méthode __toString() détermine 
            *comment l'objet doit réagir lorsqu'il est traité 
            *comme une chaîne de caractères. Par exemple, 
            *ce que echo $obj; affichera. 
            *Cette méthode doit retourner une chaîne, 
            *sinon une erreur E_RECOVERABLE_ERROR sera levée.  */
            
            $form = new Form($_POST);

            // On configure le formulaire
            $form
                ->input('email', 'email')
                ->input('firstname')
                ->input('telephone')
                ->textarea('message')
                ->button('Envoyer')
            ;

            echo $form; // Affichera le formulaire
            // On pourra soumettre le formulaire
            // et les données saisies resteront dans les champs.
            // Une méthode nous permettra de récupérer les données du formulaire
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
