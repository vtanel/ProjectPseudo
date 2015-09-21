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
    function jaame() {
        alert("J" + String.fromCharCode(228, 228) + "me siia...");
    }
</script>
<br><br>
<img
    id="pilt"
    src="http://1280x1024-taustapildid.free-online.gratis/pictures/Ilusaid-pilte-t%C3%B6%C3%B6laua-taustapilti-1446.jpg"
    alt="kass" width="128px" height="136px;" onclick="muuda()">
<script>
    function muuda() {
        var image = document.getElementById('pilt');
        if (image.src.match("pilt")) {
            image.src = "http://vignette1.wikia.nocookie.net/josh100lubu/images/4/40/18360-doge-doge-simple.jpg/revision/latest?cb=20150626051745";
        }
    }
</script>
</body>
</html>