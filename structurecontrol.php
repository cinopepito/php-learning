//for loop
<?php
echo '<strong>Nested for loop </strong>'.'<br>';
for($i=0;$i<=5;$i++){
  
    for($j=0;$j<=5;$j++){
        echo "$i $j". '<br>';
        
    }
}
?>
//while loop
<?php
echo '<h2>While loop</h2>'.'<br>';
$num=0;
while($num<20){
    echo $num .'<br>';
    $num++;
}
?>
//foreachloop

<?php
$friends=['kokou','abla','amina','kpakpo','douarte'];
print_r ($friends).'<br>';
echo $friends[0].'<br>';
echo $friends[1].'<br>';
?>

