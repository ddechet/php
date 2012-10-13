<?php
class AbstractDAO {

	public $login="root";

	public $password="";

	public $host="127.0.0.1";

	public $dbname="bibliotheque";
	
	public function getConnexion() { //doit retourner une connexion à la base de donnée
		$connexion = mysql_connect($this->host,$this->login,$this->password) or die("connexion impossible au server");
		mysql_select_db($this->dbname,$connexion) or die("connexion impossible à la base de donnée");
		return $connexion;
	}
	
}
?>