<?
class Abonne {

	public $numeroAbonne;
	public $nom;
	public $prenom;
	public $adresse;

	public function __construct($numeroAbonne, $nom, $prenom, $adresse) {
        $this->numeroAbonne=$numeroAbonne;
		$this->nom=$nom;
		$this->prenom=$prenom;
	}
    public function setNumeroAbonne($valeur) {
        $this->numeroAbonne=$valeur;
    }

	public function setNom(valeur) {
	   $this->nom=$valeur;
    }

	public function setPrenom(valeur) {
	   $this->prenom=$valeur;
    }

	public function setAdresse(valeur) {
	   $this->adresse=$valeur;
    }

	public function set($numeroAbonne, $nom, $prenom, $adresse){
	   $this->numeroAbonne=$numeroAbonne; public function getNumeroAbonne() { return $this->numeroAbonne;}
	}

	public function getNumeroAbonne() { return $this->numeroAbonne;}
	public function getNom() { return $this->non;}
	public function getPrenom() { return $this->prenom;}
	public function getAdresse() { return $this->adresse;}

	public function get() {
 	   return array($this->numeroAbonne, $this->nom, $this->prenom,  $this->adresse);
	}
}
?>