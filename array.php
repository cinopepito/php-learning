<?php
echo '<h2>Array</h2>'.'<br>';
$countries = ['lome','kara','sotouboua','bandjeli'];
echo $countries[0].'<br>';
echo $countries[1].'<br>';
echo $countries[2].'<br>';
echo $countries[3].'<br>';
?>

<?php
echo '<h2>Associative array</h2>';
$noms = array('pierrre','paul','jacque');

for($x=0;$x<=2;$x++){
    echo $noms[$x].'<br>';
}
echo '<br>';
foreach($noms as $items){
    echo $items . '<br>';
}

$age = array(
    "pierre"=>20,
    "paul"=>21,
    "jacques" =>32
);
echo '<br>';
foreach($age as $valeur){
    echo $valeur.'<br>';
}
echo '<br>';
foreach($age as $key  =>$valeur){
    echo "l'age de ". $key. " est ".$valeur .'<br>';
}
?> 