
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
	<title>Nous contacter</title>
</head>
<body>
   <?php include("debut.php") ; ?>

    <div id="corps">
    	Entrez votre adresse email, votre message et envoyer<br>

	Email      
	<input type="email" name="mail"><br><br>
	Message
	<textarea rows="5"  cols="30" name="comment">Entrez votre texte</textarea>
	<br>
	<input type="submit" name="submit" value="Envoyer">
     
    

    <?php include('fin.php') ;?>
	</div>

</body>
	
</html>