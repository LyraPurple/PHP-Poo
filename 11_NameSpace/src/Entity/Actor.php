<?php

namespace Entity;

class Actor
{
    private $id;
    private $firstname;
    private $lastname;
    private $birthday;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getAge()
    {
        $now = new \DateTime();
        $birthday = new \DateTime($this->birthday);

        // Année - année
        $ageAverage = $now->format('Y') - $birthday->format('Y');
        // Âge exact
        $age = $now->diff($birthday)->y;

        return $age;
    }

    /**
     * On passe les données de $_POST dans l'instance d'Actor
     */
    public function hydrate($data)
    {
        // $data = ['lastname' => 'Pacino', 'firstname' => 'Al', 'birthday' => '1991-11-18']

        if (empty($data)) { // S'il n'y a pas de data, on hydrate pas
            return;
        }

        var_dump($data);
        var_dump($this);
        
        // On hydrate
        $this->lastname = trim($data['lastname']);
        $this->firstname = trim($data['firstname']);
        $this->birthday = trim($data['birthday']);

        var_dump($this);
    }

    /**
     * On vérifie que les données de l'acteur soient valides
     */
    public function isValid()
    {
        $valid = true;

        if (strlen($this->lastname) < 2) {
            $valid = false;
        }

        if (strlen($this->firstname) < 2) {
            $valid = false;
        }

        // 2020-12-01
        // On vérifie que la date soit valide
        $parseDate = explode('-', $this->birthday);

        if (count($parseDate) === 3) { // on vérifie qu'on a bien 2020, 12 et 01 dans un tableau
            $day = $parseDate[2];
            $month = $parseDate[1];
            $year = $parseDate[0];
            if (!checkdate($month, $day, $year)) {
                $valid = false;
            }
        } else {
            // Si la date est à "toto"
            $valid = false;
        }

        return $valid;
    }
}
