<!-- 
<?php
	if (isset($_POST['submit'])){
	$mail= $_POST['mail'];
	$pseudo= $_POST['pseudo'];
	$pass = $_POST['pass'];
	$titre = "Formulaire d'inscription mon eFormation";
	$texte = "Voici les donn&eacute;es du fomulaire :
	<br><ul><li>ch1=" .$mail."<li>
			<li>ch2=".$pseudo."</li>
			<li>ch3=".$pass."<li>
		</ul>";
		$destinataire="admin@mediaforma.com";
		$delapartde = $mail;
		$from ="From:" .$delapartde."\n";
		$from .="MIME-version: 1.0\n";
		$from .="Content-type: text/html\n";
		$from .="charset: UTF-8\n";
		
			echo "Les données ont été transmises.";
		}
		?> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <link rel="stylesheet" type="text/css" href="site.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/sunny/jquery-ui.css" />

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <script>
        $(function () {
            $('#menu').menu();
        });
    </script>
    <script>
		function testMotdePasse(){
			var pseu = f.pseudo.value;
			var ep = new RegExp('^[a-z0-9._-]{3,8}$'); 
			if (ep.test(pseu))
				alert('Ce Pseudo est valide');
			else
				alert('Ce Pseudo n\'est pas valide');
			var mail = f.email.value;
			var ex = new RegExp('^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$');
			if(ex.test(mail))
				alert('Cette adresse est valide');
			else
				alert('Cette adresse n\'est pas valide'); 
			var mot = f.mdp.value;
			var et = new RegExp('^[a-z0-9._-]{5}$');
			if (et.test(mot))
				alert('Ce mot de passe est  valide');
			else
				alert('Ce mot de passe n\'est pas valide');
		}
	</script>

</head>

<body>
   <?php include("debut.php") ; ?>

    <div id="corps">
      <form name='f'>
		Pseudo: Le pseudo doit être composé de 3 à 8 caractères alphanumériques
(a à z, A à Z, 0 à 9). <br>
		<input type="required" name="pseudo" class="psd"> <br>
		Email: <br>
		<input type="required" name="email" size="40" class="mai"><br>
		Mot de passe: Le mot de passe doit être composé de 5 caractères
alphanumériques (a à z, A à Z, 0 à 9) <br>
		<input type="required" name="mdp"><br>
		<input type="submit" name="submit" value="Valider">
		<input type="button" value="Envoyé" onclick="testMotdePasse();">
	</form>
    </div>

    <?php include('fin.php') ;?>
<script src="membres.js"></script>
</body>


</html>