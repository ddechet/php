<?php
	require_once("classes/AbonneDAO.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<title>Liste des abonn&eacutees</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		
	    <style>
	      body {
	        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	      }
	    </style>

	</head>	
	<body>
	<?php
	    include_once("navBar.php");
		if (isset($_REQUEST["nom"])) {//si paramètre dispo alors c'est une recherche
			$abonneCriteria = new Abonne($_REQUEST["nom"],$_REQUEST["prenom"],$_REQUEST["adresse"]);
			$dao = new AbonneDAO();
			$abonneList = $dao->find($abonneCriteria);
		}
	?>
	    <div class="row-fluid" id="searchResult">
	    	<div class="row-fluid" id="searchCriteria">
			<form id="criteriaForm" name="criteriaForm" method="get" action="listAbonne.php">
				<div class="row-fluid">
					<table width="400px">
						<tr><td>
							<label>Numero abonn&eacute</label></td>
							<td><input class="input" name="numeroAbonne" type="text" value="" /></td></tr>
						<tr><td>
						<label>Nom</label></td><td>
						<input class="input" name="nom" type="text" value="" /></td></tr>
						<tr><td>
						<label>prenom</label></td><td>
						<input class="input" name="prenom" type="text" value="" /></td></tr>
						<tr><td>
						<label>Adresse</label></td><td>
						<input class="input" name="adresse" type="text" value="" /></td></tr>
						<tr><td></td><td>
						<button type="submit" class="btn btn-primary" >
						<i class="icon-search icon-white"></i>&nbsp;&nbsp;Rechercher</button></td></tr>
					</table>
				</div>				
			</form>
		</div>
	    
		<div class="row-fluid" >
				<table class="table table-striped table-bordered table-condensed">
					<tr>
						<th>Numero abonn&eacute</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Adresse</th>
						<th></th>
					</tr>
					<?php
					if (isset($abonneList)) {
						foreach($abonneList as $abonne) {
						//var_dump($dao->isAbonne($abonne));
						//var_dump($abonne);
					?>
						<tr id="<?php echo $abonne->getNumeroAbonne(); ?>">
							<td><?php echo $abonne->getNumeroAbonne(); ?></td>
							<td><?php echo $abonne->getNom(); ?></td>
							<td><?php echo $abonne->getPrenom(); ?></td>
							<td><?php echo $abonne->getAdresse(); ?></td>
							<td>
								<a class="btn" href="abonneEdition.php"><i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Editer</a>
								<a class="btn btn-danger" href="abonneSupression.php"><i class="icon-remove icon-white"></i>&nbsp;&nbsp;Supprimer</a>
							</td>
							</tr>
					<?php
						}
					}
					?>
				</table>
			</div>
		</div>
	    
	</body>
</html>
