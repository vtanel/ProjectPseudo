<!doctype html>
<html lang="et">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body id="body" >
    <!--Nupule klikates alertib "tere maailm"-->
    <button onclick="tervitus()">Tere Maailm!</button>
        <script>
            function tervitus() {
                alert("Tere Maailm!!");
            }
        </script>
    <br><br>
    <!--link alert'ib ja seej�rel khk lehek�ljele-->
    <a href="http://www.khk.ee" onclick="terekhk()">Tere Maailm</a>
        <script>
            function terekhk() {
                alert("Tere Maailm!!");
            }
        </script>
    <br><br>
    <!--Link mis alert'ib kuid j��b lehele. href peab t�hjaks j��ma-->
    <a href="" onclick="jaame()">J&auml&aumlme siia!</a>
        <script>
            function jaame() {
                alert("J" + String.fromCharCode(228, 228) + "me siia...");
            }
        </script>
    <br><br>
    <!--Kass koeraks kasutades javascripti-->
    <img
        id="pilt"
        src="http://1280x1024-taustapildid.free-online.gratis/pictures/Ilusaid-pilte-t%C3%B6%C3%B6laua-taustapilti-1446.jpg"
        alt="kass" width="128px" height="136px;" onclick="muuda()">
        <script>
            $(document).ready(function() {
                $('#pilt').click(function () {
                    $('#pilt').attr('src', 'http://vignette1.wikia.nocookie.net/josh100lubu/images/4/40/18360-doge-doge-simple.jpg/revision/latest?cb=20150626051745');
                });
            });
        </script>
    <br><br>
    <!--nupud mis muudavad taustav�rvi -->
    <button type="button" onclick="varv1()">Red</button>
    <button type="button" onclick="varv2()">Green</button>
    <button type="button" onclick="varv3()">Blue</button>

        <script>
            function varv1(){
                var button = document.getElementById('body').style.backgroundColor='Red';
            }
            function varv2(){
                var button = document.getElementById('body').style.backgroundColor='Green';
            }
            function varv3(){
                var button = document.getElementById('body').style.backgroundColor='Blue';
            }
        </script>
    <!--Nupp mis genereerib value nupu nimest-->
    <button type="button" id="nupp">yellow</button>
        <script>
            $("#nupp").click(function(){
                $("#body").css("background-color",$("#nupp").text());
            });
        </script>

</body>
</html>