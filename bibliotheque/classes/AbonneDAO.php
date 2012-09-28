<?

class AbonneDAO extends AbstractDAO {
    
	function find($abonne) {
		$connexion = $this->getConnexion();
        try {
		//on utilise pdo pour se connecter au serveur mysql
		
		$pdo = new
      pdo('mysql:host=localhost;dbname=bibliotheque', 'root', '');
       //indique à pdo de lever une execption en cas d'erreur
        
		$pdo->setAttribut(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
       //on définit la requête sql/vue/procédure stockée à exécuter.
      	 
		$sql = "Call selectMembre($numerAbonne)"; //procédure stockée
  
      //on exécute la requête
        $res = $pdo->query($sql);
     //on lit le résultat
        $rows = $res->fetchAll(pdo::FETCH_OBJET);
                $this->set($rows&#91;0&#93;numeroAbonne,$rows&#91;0&#93;nom,$rows&#91;0&#93;prenom,$rows&#91;0&#93;adresse);
                return $this->get();
            }
            catch (PDOExecption $e) {
            //on retourne une exception PDO
            return $e->getMessage();
            }			
	}
	
	function save($abonne) {
	    $connexion = $this->getConnexion();
	    try {
		$pdo = new
	 pdo('mysql:host=localhost;dbname=bibliotheque', 'root', '');
	    $pdo->setAttribut(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
		$sql = "Call insertMembre($this->numeroAbonne, '$this->nom', '$this->prenom', '$this->adresse')";
		$res = $pdo->query($sql);
		returne true;
		}
		catch (PDOException $e) {
		return $e->getMessage();
		}
	}
	
	function update($abonne) {
	    $connexion = $this->getConnexion();
		try {
		$pdo = new
	pdo('mysql:host=localhost;dbname=bibliotheque', 'root', '');
	    $pdo->setAttribut(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
		$sql = "Call updateMembre($this->numeroAbonne, '$this->nom', '$this->prenom', '$this->adresse')";
		$res = $pdo->query($sql);
		returne true;
		}
		catch (PDOException $e) {
		return $e->getMessage();
		}
	}

	function delete($abonne) {
	    $connexion = $this->getConnexion();
		try {
			$pdo = new
	pdo('mysql:host=localhost;dbname=bibliotheque', 'root', '');
	    $pdo->setAttribut(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
		$sql = "Call deleteMembre($this->numeroAbonne, '$this->nom', '$this->prenom', '$this->adresse')";
		$res = $pdo->query($sql);
		returne true;
		}
		catch (PDOException $e) {
		return $e->getMessage();
		}
		
		
	}
	

}
?>