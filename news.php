<!DOCTYPE html>
<html>
<head>
	  <meta charset="urf-8">
    <link rel="stylesheet" type="text/css" href="site.css">
    <style>
        table tr:nth-child(odd){
            background-color: grey;
        }
        table{
            border:5px solid black;
            border-radius: 25px;
            width: 60%;
            height: 60%;
            box-shadow: 5px 5px 0px grey;
        }
        .titre{
            border-radius: ;
            color:white;
        }
        .sous{
            color:blue;
        }
        
    </style>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/sunny/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
        $(function () {
            $('#menu').menu();
        });
    </script>
	<title>News</title>
</head>
<body>
   <?php include("debut.php") ; ?>

    <div id="corps">
    <center>
    <table class="ti">
        <tr class="titre">
            <td>Date</td>
            <td>News</td>
        </tr>
        <tr class="sous">
        <td>15/10/2020</td>
        <td>Création du site</td>
    </tr>
    <tr class="sous">
        <td> 20/11/2020</td>
        <td> Mise en ligne du site </td>
    </table>
</center>
    <?php include('fin.php') ;?>
	</div>

</body>
	
</html>