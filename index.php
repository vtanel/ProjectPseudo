<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'teremaailm';
if(file_exists("$page")){
    require "$page.php";
}
?>
</body>
</html>