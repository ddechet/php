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
		<tr><td class="label" style="color:black;">Votre nom :</td>
			<td><input class="label" id="thename" type="text" name="nom"/></td></tr>
		<tr id="prenomLine"><td class="label" id="test">Votre pr�nom :</td>
			<td class="label"><input class="label" id="thefirstname" type="text" name="prenom"/></td></tr>
		<tr>
			<td></td>	
			<td><input type="submit" value="Valider"/>
			</td></tr>
	</table>
	</form>
</div>
<?php
	include_once("testAction.php");
?>
</body>
</html>
