<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed</title>
</head>
<body>
<?php
/*$eesnimi_algab_vokaaliga;
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
class persoon{
    public $isik=array(
        'Eesnimi'=>'Tanel ',
        'Perenimi'=>'Viira ',
        'Vanus'=>21,
        'Sugu'=>'Mees'
    );
    public function construkt(){
        $this->isik["Eesnimi"] = $ees;
        $this->isik["Perenimi"] = $pere;
        $this->isik["Vanus"]= $vanus;
        $this->isik["Sugu"] = $sugu;
    }
    public function valjasta(){
        echo $this->isik["Eesnimi"].$this->isik["Perenimi"].'('. $this->isik["Vanus"].') '. $this->isik["Sugu"];
    }

}
$me=new persoon();
echo $me->valjasta();*/
/*
$arv1=1.23;
$arv2=2.34;
$sum=$arv1+$arv2;
echo $sum;
*/
$koer='terjer';
echo '<form action="serveripoolsed.php" method="get">
    <input type="text" name="koer" value="'.$koer.'" hidden>
    <input type="submit">
</form><br><br>';
echo '<form action="?" method="POST">
    <input type="text" value="kass" name="name">
    <input type="submit" name="vaata">
</form>';
if(isset($_POST['vaata'])){
    if($_POST['name']!==''){
        echo 'Kass oli: '.$_POST['name'];
    }
}
?>

</body>
</html>