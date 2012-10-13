<?php if (isset($_GET["nom"])) { ?>
Bonjour &nbsp
<?php
 echo $_GET["nom"] . "&nbsp;" . $_GET["prenom"]; 
 //echo $_POST["nom"] . "&nbsp;" . $_POST["prenom"]; 
?>
&nbsp;!
<?php } ?>