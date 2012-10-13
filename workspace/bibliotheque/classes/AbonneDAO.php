<?php
require_once("Abonne.php");
require_once("AbstractDAO.php");

class AbonneDAO extends AbstractDAO {
    
	public function getConnexion() {
		return parent::getConnexion();
	}
	
	function buildWhere($abonne) {
		$result = " WHERE 1=1 ";
		if (!empty($abonne->nom)) $result = $result . " AND nom like '$abonne->nom' ";
		if (!empty($abonne->prenom)) $result = $result . " AND prenom like '$abonne->prenom' ";
		if (!empty($abonne->adresse)) $result = $result . " AND adresse like '$abonne->adresse' ";
		if (!empty($abonne->numeroAbonne)) $result = $result . " AND numeroAbonne like '$abonne->numeroAbonne' ";
		//var_dump($result);
		return $result;
	}
	
	function findAll() {
		$abonne = new Abonne();
		return $this->find($abonne);
	}
	
	function find($abonne) {
		if (!$this->isAbonne($abonne)) die("La variable n'est pas un abonné !");
		$connexion = $this->getConnexion();
        $request = "SELECT * FROM Abonne " . $this->buildWhere($abonne);
		//var_dump($request);
		$query_res = mysql_query($request,$connexion);
		
		if ($query_res) {
			$nb_ligne = mysql_num_rows($query_res);
			if ($nb_ligne==0) return null;
			else {
				for($i=0;$i<$nb_ligne;$i++){
					$ligne = mysql_fetch_array($query_res);
					$result[] = new Abonne(
								$ligne['nom'],				
								$ligne['prenom'],
								$ligne['adresse'],
								$ligne['numeroAbonne']
					);
				}
				return $result;
			}
		}else return null;
	
	}
	
	function save($abonne) {
		if (!$this->isAbonne($abonne)) die("La variable n'est pas un abonné !");
	    $connexion = $this->getConnexion();
		$request = "INSERT INTO Abonne(nom, prenom, adresse) VALUES('$abonne->nom', '$abonne->prenom', '$abonne->adresse') ";
		$result = mysql_query($request,$connexion);
		return $result;
	}
	
	function update($abonne) {
		if (!$this->isAbonne($abonne)) die("La variable n'est pas un abonné !");
	    $connexion = $this->getConnexion();
		$request = "UPDATE Abonne SET nom='$abonne->nom', prenom='$abonne->prenom', adresse='$abonne->adresse' WHERE (numeroAbonne = '$abonne->numeroAbonne') ";
		$result = mysql_query($request,$connexion);
		return $result;
	}

	function deleteById($numeroAbonne) {
	    $connexion = $this->getConnexion();
		$request = "DELETE FROM Abonne WHERE (numeroAbonne = '$numeroAbonne') ";
		$result = mysql_query($request,$connexion);
		return $result;		
	}
	
	function isAbonne($abonne){
		if (!strcasecmp(get_class($abonne),"Abonne"))
			return true; 
		else 
			return false;
	}
	
}
?>