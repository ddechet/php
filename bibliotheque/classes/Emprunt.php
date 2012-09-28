<?
class Emprunt {
    
	public $numeroEmprunt;
	public $numeroAbonne; 		
	public $numeroLivre; 		
	public $dateDebut;
	public $dateFin;
	
	function __construct($numeroEmprunt, $numeroAbonne, $numeroLivre, $dateDebut, $dateFin) {
        $this->numeroEmprunt=$numeroEmprunt;
		$this->numeroLivre=$numeroLivre;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
		    
    }

}
?>