<?php

namespace Entity;

class Actor {
	private $id;
	private $lastname;
	private $firstname;
	private $birthday;
	

	public function getId() {
		return $this->id;
	}

	public function getFullName() {
		return $this->firstname . ' ' . $this->lastname;
	}
	
	public function getAge() {
		$birthday_date = new \DateTime($this->birthday);
		// Par défaut, new DateTime() renvoie la date actuelle.
		// Voir http://php.net/manual/fr/datetime.construct.php
		$current_date = new \DateTime();
		// diff renvoie la durée entre 2 DateTime.
		// Voir http://php.net/manual/fr/datetime.diff.php
		$interval = $birthday_date->diff($current_date);
		// y contient le nombre d'années.
		// Voir http://php.net/manual/fr/class.dateinterval.php
		return $interval->y;
	}
}