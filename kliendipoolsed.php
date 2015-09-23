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
    <!--link alert'ib ja seejärel khk leheküljele-->
    <a href="http://www.khk.ee" onclick="terekhk()">Tere Maailm</a>
        <script>
            function terekhk() {
                alert("Tere Maailm!!");
            }
        </script>
    <br><br>
    <!--Link mis alert'ib kuid jääb lehele. href peab tühjaks jääma-->
    <a href onclick="jaame()">J&auml&aumlme siia!</a>
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
    <!--nupud mis muudavad taustavärvi -->
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
    <!-- Keelan ja luban parema kliki kasutamise veebilehel   -->
    <script>
        //keelan parema kliki
        $(document).ready(function(){
            $(this).bind("contextmenu", function(e) {
                e.preventDefault();
            });
            //Luban taas parema kliki
            $("#lubaKlikk").click(function(){
                $(document).ready(function(){
                    $(this).unbind();
                    });
                });
        });
    </script>
    <br><br>
    <!--  Nupp parema kliki tegemiseks  -->
    <button type="button" id="lubaKlikk">Luba parem kl&otildeps</button>
    <br><br>
    <!--  Nupp mis peidab/toob esile kassipildi  -->
    <button type="button" id="peidaTooEsile">Do the Magic!</button>
         <script>
             $(document).ready(function () {
                 $('#peidaTooEsile').click(function() {
                     $('#pilt').toggle(function() {
                         $('#peidaTooEsile').hide();
                     }, function() {
                         $('#peidaTooEsile').show();
                     });
                 });
             });
         </script>
</body>
</html>