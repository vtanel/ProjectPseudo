<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
    <button onclick="tervitus()">Tere Maailm!</button>
        <script>
            function tervitus() {
                alert("Tere Maailm!!");
            }
        </script>
    <br><br>
    <a href="http://www.khk.ee" onclick="terekhk()">Tere Maailm</a>
        <script>
            function terekhk() {
                alert("Tere Maailm!!");
        }
        </script>
    <br><br>
    <a href="" onclick="jaame()">J&auml&aumlme siia!</a>
        <script>
            function jaame(){
                alert("J"+String.fromCharCode(228,228)+"me siia...");
            }
        </script>
</body>
</html>