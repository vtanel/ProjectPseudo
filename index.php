<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<h1>saddsaa</h1>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'teremaailm';
if(file_exists("$page.php")){
    require "$page.php";
}
?>
</body>
</html>
