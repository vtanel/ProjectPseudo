<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed</title>
</head>
<body>
<?php
$eesnimi_algab_vokaaliga = false;
$vokaalid=array('A','E','I','O','U','Õ','Ä','Ö','Ü');
$isik=array(
    'Eesnimi'=>'Tanel ',
    'Perenimi'=>'Viira ',
    'Vanus'=>'(21)'
);
foreach($isik as $key=>$value){
    echo $value;
};
echo '<br><br>';
for($i=0;$i<=count(@explode(',',$vokaalid));$i++){
    if(substr(strtoUpper($isik['Eesnimi']),0,1) == $vokaalid[$i]){
        echo  'Nimi algab vokaaliga.';
    }else{
        echo   'Nimi ei alga vokaaliga.';
    };
};
?>
</body>
</html>