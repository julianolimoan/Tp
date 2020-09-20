<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <link rel="stylesheet" type="text/css" href="exocss/site.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/sunny/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
        $(function () {
            $('#menu').menu();
        });
    </script>
</head>

<body>
    <div id="entete">
        <img src="logo.png" id="logo">
        eFormation HTML5 CSS3 jQuery
    </div>

    <div id="lemenu">
        <ul id="menu">
            <li><a href="apropos">A propos</a></li>
    
             <li><a href="contact.html"> Contacter</a></li>
            
             <li><a href="News">News</a></li>
        
             <li><a href="formulaire.html">Zone membre</li> </a>
            

        </ul>
    </div>
    <div id="basdepage">

        <span id="copy">Copyright (c) 2013</span>
        <span id="uni" href="lien1">Lien 1</span>
        <span id="horizontale" href="lien2">Lien 2</span>
        <span id="vertical" href="lien3">Lien 3</span>
        <span id="texture">texture</span>
        <script>

            $("#uni").click(function () {
                $("#corps").css("background-color", "white");

            });
            $("#horizontale").click(function () {
                $("#corps").css("background", "-webkit-gradient(linear, +0% 0%, 100% 0% from(red),to(yellow))");

            });
            $("#vertical").click(function () {
                $("#corps").css("background", "-webkit-gradient(linear, 0% 0%, 0% 100%, from(red),to(yellow))");

            });
            $('#texture').click(function () {
                $('#logo').css('display', 'inline');



            });




        </script>
    </div>

</body>


</html>