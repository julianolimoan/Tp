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