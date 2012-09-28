<?
class Livre {
    
	public $numeroLivre;
	public $titre; 		
	public $genre; 		
	public $auteur;
	
	function __construct($numeroLivre, $titre, $genre, $auteur) {
     $this->numeroLivre=$numeroLivre; 
	 $this->titre=$titre; 
	 $this->genre=$genre; 
	 $this->auteur=$auteur; 
	 
	 }
?>