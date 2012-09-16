<?
class Abonne {
    
	public $numeroAbonne;
	public $nom; 		
	public $prenom; 		
	public $adresse;
	
	function __construct($numeroAbonne, $nom, $prenom, $adresse) {
        $this->numeroAbonne=$numeroAbonne;
		$this->nom=$nom;
		$this->prenom=$prenom;
		
    }

}
?>