<?php
class Abonne {

	public $numeroAbonne;
	public $nom;
	public $prenom;
	public $adresse;

	public function __construct($nom=null, $prenom=null, $adresse=null, $numeroAbonne=null) {
        $this->numeroAbonne=$numeroAbonne;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	}
    public function setNumeroAbonne($valeur) {
        $this->numeroAbonne=$valeur;
    }

	public function setNom($valeur) {
	   $this->nom=$valeur;
    }

	public function setPrenom($valeur) {
	   $this->prenom=$valeur;
    }

	public function setAdresse($valeur) {
	   $this->adresse=$valeur;
    }

	public function getNumeroAbonne() { return $this->numeroAbonne;}
	public function getNom() { return $this->nom;}
	public function getPrenom() { return $this->prenom;}
	public function getAdresse() { return $this->adresse;}
	
}//Class end.

function testAbonne() {
	$abonne = new Abonne();
	$abonne->setPrenom("toto");
	var_dump($abonne);
}

//testAbonne();

?>