<?php
require_once("classes/AbonneDAO.php");

function shouldFindAbonneWithNameBeginningWithDu() {
	$abonneDAO = new AbonneDAO();
	$abonneCriteria = new Abonne("Du%");

	$abonneList = $abonneDAO->find($abonneCriteria);
	var_dump($abonneList);
}

function shouldFindJean() {
	$abonneDAO = new AbonneDAO();
	$abonneCriteria = new Abonne("","Jean");

	$abonneList = $abonneDAO->find($abonneCriteria);
	var_dump($abonneList);
}

function shouldFindAllAbonne() {
	$abonneDAO = new AbonneDAO();
	$abonneList = $abonneDAO->findAll();
	var_dump($abonneList);
}

function shouldSave() {
	$abonneDAO = new AbonneDAO();
	$newAbonne = new Abonne("Wood","John","2 rue des lilas blancs");
	$result = $abonneDAO->save($newAbonne);
	var_dump($result);
	
	$abonneCriteria = new Abonne("Wood");

	$reloadedAbonne = $abonneDAO->find($abonneCriteria);
	var_dump($reloadedAbonne);
	
}

function shouldDeleteById() {
	$abonneDAO = new AbonneDAO();
	$result = $abonneDAO->deleteById(3);
	var_dump($result);
}


function shouldUpdateJean() {
	$abonneDAO = new AbonneDAO();
	$abonneCriteria = new Abonne("","Jean");
	$abonneList = $abonneDAO->find($abonneCriteria);
	
	$abonneToUpdate = $abonneList[0];
	$abonneToUpdate->setAdresse("2 rue de PARIS");
	$result = $abonneDAO->update($abonneToUpdate);
	var_dump($result);
}

//shouldFindJean();
//shouldFindAllAbonne();
//shouldSave();
//shouldDeleteById();
//shouldUpdateJean();

?>