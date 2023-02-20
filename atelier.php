<?php
$membres = array(
    array('pierre',24,'pierre.giraud@edhec.com'),
    array('paul',22,'paul.dubreuil@live.com'),
    array('jacques',34,'jacquot@gmail.com'),
);
echo $membres[0][0] .'a ' . $membres[0][1].'ans. Son mail est : '.$membres[0][2].'<br>';
echo $membres[1][0] .'a ' . $membres[1][1].'ans. Son mail est : '.$membres[1][2].'<br>';
echo $membres[2][0] .'a ' . $membres[2][1].'ans. Son mail est : '.$membres[2][2].'<br>';

for($ligne=0;$ligne<3;$ligne++){
    $membre_no = $ligne+1;
    echo 'membre no'.$menmbre_no.'<br>';
    
    echo '<ul>';
    for($col=0;$col<3;$col++){
        echo '<li>'.$membres[$ligne][$col].'</li>';
    }
    echo '</ul>';
}
?>

<?php 
function abc($a,$b){
    return $a+$b;
}

echo (abc(10,15));
?>
