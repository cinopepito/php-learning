<?php
echo '<h1>Form submission here</h1>';
if(isset($_POST['submit'])){

    $names=array("edwin","student","mohab","jane","kokou");
    $username = $_POST['username'];
    $password= $_POST["password"];
    $minimum = 5;
    $maximum=10;

  if(strlen($username) < $minimum){
    echo 'The username has to be longer than '. $minimum .'<br>';
  }
  if(strlen($username) > $minimum){
    echo 'The username has to be longer than '. $maximum .'<br>';
  }
    
    echo 'the username is : ' . $username . '<br>';
  
    echo 'the password is : ' . $password. '<br>';
    
}
if(!in_array($username,$names)){
    echo ' sorry you can not log in here'. '<br>';
}else{
    echo ' you are welcomed here'. '<br>';
}
?>