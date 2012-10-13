<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ma page de test</title>
	<script type="text/javascript" src="./js/myfunctions.js"></script>
	<link rel="stylesheet" href="./style/mystyle.css" type="text/css"/>
</head>
<body>
<div class="mydiv" id="mydiv">
	<form >
	<table>
		<tr><td class="label" style="color:black;">Nombre :</td>
			<td><input class="label" id="thename" type="text" name="val"/></td></tr>
		<tr>
			<td></td>	
			<td><input type="submit" value="Calculer"/>
			</td></tr>
	</table>
	</form>
</div>
<?php
	if (isset($_GET["val"])) {
		$x = $_GET["val"];
		$carre = $x*$x;
	    
		echo "Le carre de $x est $carre";
		$_SESSION["listeCarre"][]=$carre;
		
	}
?>
<p/>
Liste des carr�es calcul�s :
<?php 
	if (isset($_SESSION["listeCarre"])) {
		$listecarre = $_SESSION["listeCarre"];
		//var_dump($listecarre);
		foreach ($listecarre as $carreCalcule) {
			echo "<br/><a href=\"nombreSelectionne.php?nombre=$carreCalcule\">$carreCalcule</a>";
		}
	}
?>
</body>
</html>
